<!-- Modal -->
<div class="modal fade" id="modalImage-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ratingModalLabel">Foto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="row">
            <div class="col-md-12">
              <img src="{{ asset('img/'.$data->foto) }}" alt="">
            </div>
          </div>
{{-- Content --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>