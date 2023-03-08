<div>
   <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-md-6 mx-auto">
                    <button class="btn catebtnclr float-end mb-2" data-bs-toggle="modal" data-bs-target="#newCategoryModal">New Category</button>
                    <div class="mt-3">
                        <table class="table table-bordered borderclr shadow">
                            <thead class="bghdcolor theadclr">
                                <tr class="text-center">
                                    <th>Category</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody class="bgcolor">
                                @foreach ( $categories as $category )
                                    <tr>
                                        <td class="text-center">{{ $category->category }}</td>
                                        <td>{{ $category->remarks }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <div wire:ignore.self class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bghdcolor theadclr">
                    <h1 class="modal-title fs-5" id="newCategory">Add New Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bgcolor">
                    <div class="mt-3 col-md-7 mx-auto">
                        <input type="text" class="form-control text-center" placeholder="Category" wire:model="category">
                    </div>
                    <div class="input-group input-group-lg mt-3">
                        <textarea class="form-control form-control-lg" placeholder="Remarks" wire:model="remarks"></textarea>
                    </div>
                </div>
                <div class="modal-footer bghdcolor">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn addcatebtnclr" wire:click.prevent="store()">Add Category</button>
                </div>
            </div>
        </div>
    </div>
</div>
