<!-- Modal -->
<div  class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form" enctype="multipart/form-data">
                  @csrf
                    <input type="hidden" id="id" name="id">
  
                    <div class="mb-3">
                      <label for="image" class="form-label">Gambar Berita</label>
                      <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                      <span class="text-danger">
                          <i id="image-error"></i>
                      </span>
                  </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <span class="text-danger">
                          <i id="title-error"></i>
                      </span>
                    </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Deskripsi Berita</label>
                      <textarea name="description" class="form-control ckeditor" id="description" required></textarea>
                      <span class="text-danger">
                          <i id="description-error"></i>
                      </span>
                      {{-- <input type="text" class="form-control" id="description" name="description" required> --}}
                  </div>
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
  </div>