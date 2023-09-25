    <div class="modal modal fade " id="modal_add_roles">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-white border-accent-thin">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body ">

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Name <i class="redStar">*</i></span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid" placeholder="Enter Name"
                            minlength="3" maxlength=250" name="name" id="name" />
                    </div><br>




                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Status<i class="redStar">*</i></span>
                        </label>
                        <!--end::Label-->
                        <select name="status" required id="status" class="form-control">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button style="color:white !important;" type="submit" onclick="saveGrade()"
                        class="btn btn-primary btnSave">
                        <span style="color:white !important;" class="indicator-label">Save</span>
                        <span style="color:white !important;" class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                    </button>
                </div>

            </div>
        </div>
    </div>
