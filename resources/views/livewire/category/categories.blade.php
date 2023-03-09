<div>
    @if (session()->has('message'))
        <div class="alert alert-success col-md-3 mx-auto mt-3 text-center">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('deleted'))
        <div class="alert alert-danger col-md-3 mx-auto mt-3 text-center">
            {{ session('deleted') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger col-md-4 mx-auto mt-3 text-center">
            {{ session('error') }}
        </div>
    @endif

   <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-md-6 mx-auto">
                    <button class="btn catebtnclr float-end mb-2" data-bs-toggle="modal" data-bs-target="#newCategoryModal">New Category</button>
                    <div class="mt-3">
                        <table class="table table-bordered table-hover borderclr shadow">
                            <thead class="bghdcolor theadclr">
                                <tr class="text-center">
                                    <th>Category</th>
                                    <th>Remarks</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="bgcolor">
                                @foreach ( $categories as $category )
                                    <tr>
                                        <td class="text-center">{{ $category->category }}</td>
                                        <td>{{ $category->remarks }}</td>
                                        <td><button class="btn dltbtnclr" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal" wire:click="rmvCat({{ $category->id }})"><i class="fa-solid fa-trash"></i></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <div wire:ignore.self class="modal fade" id="newCategoryModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="newCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bghdcolor theadclr">
                    <h1 class="modal-title fs-5" id="newCategory">Add New Category</h1>
                </div>
                <div class="modal-body bgcolor">
                    <div class="mt-3 col-md-7 mx-auto">
                        <input type="text" class="form-control text-center createcolor" placeholder="Category" wire:model="category">
                    </div>
                    <div class="input-group input-group-lg mt-3">
                        <textarea class="form-control form-control-lg createcolor" placeholder="Remarks" wire:model="remarks"></textarea>
                    </div>
                </div>
                <div class="modal-footer bghdcolor">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn addcatebtnclr" data-bs-dismiss="modal" wire:click="store()">Add Category</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteCategoryModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="deleteCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bghdcolor theadclr">
                    <h1 class="modal-title fs-5" id="newCategory">Are you sure you want to remove this category?</h1>
                </div>
                <div class="modal-body bgcolor">
                    <div class="mt-3 col-md-7 mx-auto">
                        <input type="text" class="form-control text-center createcolor" placeholder="Category" wire:model="dltCategory" readonly>
                    </div>
                    <div class="input-group input-group-lg mt-3">
                        <textarea class="form-control form-control-lg createcolor" placeholder="Remarks" wire:model="dltRemarks" readonly></textarea>
                    </div>
                </div>
                <div class="modal-footer bghdcolor">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn addcatebtnclr" data-bs-dismiss="modal" wire:click="destroy()">Remove</button>
                </div>
            </div>
        </div>
    </div>
</div>
