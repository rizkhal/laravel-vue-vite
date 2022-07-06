<x-app-layout :title="$title">
    <x-form.wrapper
        :title="$title"
        submit-text="Simpan"
        title-icon="flaticon-notepad"
        :action="route('reading-quran.store')"
        :back-url="route('reading-quran.index')"
    >
        <div class="form-group">
            <label for="">Pilih Kelas</label>

            <select
                name="room_id"
                id="select-rooms"
                class="form-control"
                data-allow-clear="true"
                data-placeholder="Pilih Kelas"
            ></select>
        </div>

        <div class="form-group">
            <label for="">Pilih Siswa</label>

            <select
                name="student_id"
                id="select-students"
                class="form-control"
                data-allow-clear="true"
                data-placeholder="Pilih Siswa"
            ></select>
        </div>

        <hr />
        
        <div>
            <x-form.select
                name="surah"
                :select2="true"
                label="Pilih Surah"
            >
                @foreach ($surahs as $surah)
                    <option value="{{ $surah['number'] }}">{{ $surah['englishName'] }}</option>
                @endforeach
            </x-form.select>

            <div class="row">
                <div class="col-lg-6">
                    <x-form.select
                        name="surah"
                        :select2="true"
                        label="Mulai dari"
                    >
                        @foreach ($surahs as $surah)
                            <option value="{{ $surah['number'] }}">{{ $surah['englishName'] }}</option>
                        @endforeach
                    </x-form.select>
                </div>
                <div class="col-lg-6">
                    <x-form.select
                        name="surah"
                        :select2="true"
                        label="Sampai pada"
                    >
                        @foreach ($surahs as $surah)
                            <option value="{{ $surah['number'] }}">{{ $surah['englishName'] }}</option>
                        @endforeach
                    </x-form.select>
                </div>
            </div>

            <x-form.select
                name="ability"
                :select2="true"
                label="Pilih Kemampuan"
            >
                @foreach ($abilities as $ability)
                    <option value="{{ $ability['value'] }}">{{ $ability['label'] }}</option>
                @endforeach
            </x-form.select>
        </div>
    </x-form.wrapper>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="surah"], select[name="ability"]').select2();

                $('#select-rooms').select2({
                    width: '100%',
                    placeholder: "Pilih Kelas",
                    ajax: {
                        url: "{{ route('api.v1.rooms') }}",
                        dataType: 'json',
                        delay: 250,
                        cache: true,
                        processResults: function(data) {
                            return {
                                results: data.data.map(v => {
                                    return {
                                        id: v.id_kelas,
                                        text: v.nama_kelas,
                                    }
                                })
                            }
                        },
                    }
                });

                $('#select-students').select2({
                    width: '100%',
                    placeholder: "Pilih Siswa",
                    ajax: {
                        url: "{{ route('api.v1.students') }}",
                        dataType: 'json',
                        delay: 250,
                        cache: true,
                        processResults: function(data) {
                            return {
                                results: data.data.map(v => {
                                    return {
                                        id: v.id_kelas,
                                        text: v.nama,
                                        nisn: v.nisn,
                                    }
                                })
                            }
                        },
                    },
                    templateResult: function(state) {
                        var $state;

                        if (state.nisn) {
                            $state = $(
                                `<span style="display: block;font-weight: bold;">${state.text}</span>` +
                                `<span>${state.nisn}</span>`)
                        } else {
                            $state = $(
                                `<span style="display: block;font-weight: bold;">${state.text}</span>`
                            )
                        }

                        return $state;
                    },
                });
            });
        </script>
    @endpush
</x-app-layout>
