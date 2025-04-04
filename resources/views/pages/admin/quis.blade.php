<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    QUIZ</h4>



            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">QUIZZESS</h4>
                    <div class="row mb-5">
                        <div class="col-sm-6">
                            <form action="{{ route('admin.quis-store') }}" method="POST">
                                @csrf
                                @method('POST')

                                    <x-form.input label="Quiz" type="text" id="quizInput" name="pertanyaan"
                                        :required="true" />
                                    <x-form.input label="materi_id" type="text" id="materi_idInput" name="materi_id"
                                        :hidden="true" value="{{ $materi->id }}" />
                                    <div class="position-absolute bottom-0 end-0">
                                        @if ($quis)
                                        <button hidden class="btn btn-primary" type="submit" id="addButton"> Tambah
                                            Quiz </button>
                                    @else
                                        <button class="btn btn-primary" type="submit" id="addButton"> Tambah Quiz
                                        </button>
                                @endif
                        </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form action="{{ route('admin.jawaban-store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <x-form.input label="quis_id" type="text" id="quis_idInput" name="quis_id"
                                :hidden="true" value="{{ $quis?->id }}" />
                            <x-form.input label="Answer" type="text" id="answerInput" name="jawaban"
                                :required="true" />

                            <x-form.select-search label="Opsi" id="opsiInput" name="opsi" :required="true">
                                @foreach (['A', 'B', 'C', 'D'] as $opsi)
                                    @if (!in_array($opsi, $opsiDipilih))
                                        <!-- Mengecek apakah opsi sudah dipilih -->
                                        <option value="{{ $opsi }}">{{ $opsi }}</option>
                                    @endif
                                @endforeach
                                {{-- <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option> --}}

                            </x-form.select-search>
                            <div class="selected-options mt-4">
                                <h4>Opsi yang dipilih:</h4>
                                <div id="selectedOptionsList" class="flex flex-wrap gap-2 mt-2"></div>

                                <!-- Input tersembunyi untuk menyimpan semua nilai yang dipilih -->
                                <input type="hidden" name="selected_options" id="selectedOptionsInput">
                            </div>
                            <x-form.select-search label="Status" id="statusInput" name="status" :required="true">
                                <option value="salah">Salah</option>
                                <option value="benar">Benar</option>
                            </x-form.select-search>
                            <div class="d-flex justify-content-end">
                                @if ($quis)
                                    <button class="btn btn-primary" type="submit" id="addButton"> Tambah Jawaban
                                    </button>
                                @else
                                    <button hidden class="btn btn-primary" type="submit" id="addButton"> Tambah
                                        Jawaban
                                    </button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        @if ($quis)
                            <h3>{{ $quis->pertanyaan }}</h3>
                            <div class="position-absolute bottom-0 end-0">
                                <form action="{{ route('admin.quis-delete', $quis->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit" id="deleteButton">Hapus
                                        Quiz</button>

                                </form>
                            </div>
                        @else
                            <p>Belum ada Quiz</p>
                        @endif
                        @if ($jawabans)

                            @foreach ($jawabans->sortBy('opsi') as $jawaban)
                                <h5>{{ $jawaban->opsi }} . {{ $jawaban->jawaban }}</h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <x-component.datatable id="CourseTable">
                            <thead>
                                <th>#</th>
                                <th>Answer</th>
                                <th>Opsi</th>
                                <th>Status</th>

                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($jawabans as $jawaban)
                                    <tr data-id="1">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jawaban->jawaban }}</td>
                                        <td>{{ $jawaban->opsi }}</td>
                                        <td>
                                            {{ $jawaban->status }}
                                        </td>

                                        <td style="width: 100px" class="">
                                            <div class="d-flex  gap-2">


                                                <form action="{{ route('admin.jawaban-delete', $jawaban->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </x-component.datatable>
                    </div>
                </div>
                <p class="card-title-desc">
                </p>
            </div>
            <div class="card-body">


            </div>
        </div>
    </div> <!-- end col -->
    </div>
</x-admin.layout>


@push('scripts')
    <script>
        $(document).ready(function() {
            // Array untuk menyimpan opsi yang sudah dipilih
            var selectedOptions = [];

            // Periksa apakah komponen select-search memiliki elemen dropdown custom
            var selectSearchElement = $('#opsiInput');
            var dropdownContainer = selectSearchElement.next('.select-search-container');

            if (dropdownContainer.length > 0) {
                // Komponen menggunakan dropdown custom, pantau perubahannya
                var observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'childList') {
                            // Update opsi yang tersedia di dropdown custom
                            updateCustomDropdownOptions();
                        }
                    });
                });

                // Konfigurasi observer
                var config = {
                    childList: true,
                    subtree: true
                };

                // Mulai memantau dropdown container
                observer.observe(dropdownContainer[0], config);
            }

            // Handler untuk perubahan nilai di select
            $('#opsiInput').on('change', function() {
                var selectedValue = $(this).val();

                if (selectedValue) {
                    // Tambahkan nilai ke array yang sudah dipilih
                    selectedOptions.push(selectedValue);

                    // Update opsi di elemen asli
                    updateOriginalSelectOptions();

                    // Update juga opsi di dropdown custom jika ada
                    updateCustomDropdownOptions();

                    // Reset dropdown ke nilai kosong
                    $(this).val('');
                }
            });

            // Fungsi untuk update opsi di elemen select asli
            function updateOriginalSelectOptions() {
                $('#opsiInput option').each(function() {
                    var optionValue = $(this).val();

                    // Jika opsi ini ada di daftar yang sudah dipilih dan bukan opsi kosong
                    if (optionValue && selectedOptions.includes(optionValue)) {
                        $(this).prop('disabled', true).hide();
                    }
                });
            }

            // Fungsi untuk update opsi di dropdown custom
            function updateCustomDropdownOptions() {
                // Cari elemen dropdown custom (biasanya berupa ul/li)
                var dropdownList = dropdownContainer.find('ul');

                if (dropdownList.length > 0) {
                    dropdownList.find('li').each(function() {
                        var optionValue = $(this).data('value');

                        // Jika tidak ada data-value, coba cari dari atribut lain atau teks
                        if (!optionValue) {
                            optionValue = $(this).text().trim();
                        }

                        // Jika opsi ini ada di daftar yang sudah dipilih
                        if (optionValue && selectedOptions.includes(optionValue)) {
                            $(this).hide();
                        }
                    });
                }
            }
        });
    </script>
@endpush
