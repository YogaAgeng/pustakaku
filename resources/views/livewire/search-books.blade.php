<div>
    <div class="row">
        <div class="col-6 mt-2 mb-5">
            <form wire:submit.prevent="search"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group"
                    style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;border-radius:5px">
                    <input wire:model="searchTerm" type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            {{-- <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead> --}}
            <tbody>
                @foreach($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book['volumeInfo']['title'] }}</td>
                    <td>{{ $book['volumeInfo']['publisher'] }}</td>
                    <td>{{ $book['volumeInfo']['publishedDate'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
