<!-- Modal -->
<div  class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Upload Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form" enctype="multipart/form-data">
                  @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Dokumen</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                      <span class="text-danger">
                        <i id="name-error"></i>
                    </span>
                  </div>
                    <div class="mb-3">
                      <label for="file" class="form-label">Dokumen</label>
                      <input type="file" class="form-control" id="file" name="file" required>
                      <span class="text-danger">
                        <i id="file-error"></i>
                    </span>
                  </div>
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
  </div>