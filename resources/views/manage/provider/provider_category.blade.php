<div class="modal modal fade  " id="modal_provider_category">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-white border-accent-thin">
            <!-- Modal Header -->
            <div class="modal-header">
                <span>Financial Providers Category</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('provider_category.save') }}" method="post">
                @csrf
                <div class="modal-body ">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>CategoryName <i class="text-danger">*</i></span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid" placeholder="Enter Name"
                            minlength="3" maxlength=250" name="CategoryName" id="CategoryName" />
                    </div>



                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Description <i class="text-danger">*</i></span>
                        </label>
                        <!--end::Label-->

                        <textarea required class="form-control form-control-solid" name="Description" id="Description" cols="10"
                            rows="3"></textarea>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Status<i class="text-danger">*</i></span>
                        </label>
                        <!--end::Label-->
                        <select name="Status" required id="Status" class="form-control">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" onclick="saveGrade()" class="btn btn-primary btnSave">
                        <span class="indicator-label text-capitalize">Save</span>
                        <span class="indicator-progress text-capitalize">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>

                    <button type="button" class="btn btn-secondary text-capitalize" data-bs-dismiss="modal">Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
