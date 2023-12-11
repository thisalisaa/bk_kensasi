<div class="tab-pane fade" id="perbarui-biodata" role="tabpanel" aria-labelledby="perbarui-biodata-tab">
                <!-- Formulir untuk perbarui biodata -->
                <form action="{{ url('/biodata/perbarui') }}" method="post">
                    @csrf
                    <!-- Tambahkan elemen formulir sesuai dengan data yang ingin diperbarui -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                    </div>
                    <!-- Tambahkan elemen formulir lainnya -->

                    <!-- Tombol untuk menyimpan perubahan -->
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>