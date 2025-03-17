<div class="mx-5">
    <div class="flex flex-col justify-between mx-4 mt-4 mb-6">
        <div class="max-w-full p-4 mt-4 mb-4 bg-white rounded-lg shadow-lg">
            <table class="min-w-full mt-4 bg-white border border-gray-200">
                <thead>
                    <tr class="items-center w-full text-sm align-middle bg-customPurple">
                        <th class="px-4 py-2 text-center">Nama Mahasiswa</th>
                        <th class="px-4 py-2 text-center">NIM Mahasiswa</th>
                        <th class="px-4 py-2 text-center">Tahun Masuk</th>
                        <th class="px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $mahasiswa)
                        <tr class="border-t">
                            <td class="px-4 py-2 text-center">{{ $mahasiswa->nama_mahasiswa }}</td>
                            <td class="px-4 py-2 text-center">{{ $mahasiswa->nim }}</td>
                            <td class="px-4 py-2 text-center">
                                {{ $mahasiswa->tahunMasuk->tahun }}
                            </td>
                            <td class="px-4 py-2 text-center">
                                <div class="flex justify-center space-x-2">
                                    <button class="inline-block px-3 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                                        Lihat
                                    </button>
                                    <button class="inline-block px-3 py-2 text-white bg-green-500 rounded hover:bg-green-700">
                                        Edit
                                    </button>
                                    <button class="inline-block px-3 py-2 text-white bg-red-500 rounded hover:bg-red-700"
                                        onclick="confirmDelete('{{ $mahasiswa->id_mahasiswa }}', '{{ $mahasiswa->nama }}')">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
