<div class="indexStyleTitulo">
    <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
        <h3 style="font-size: 20px; text-align: center;">
            <span class="cooperative-info-title">FREQUENCY INFO!</span>
        </h3>
        <form style="max-width: 400px; margin: 0 auto;">
            <div class="row mb-3">
                <label for="origin" class="col-sm-4 col-form-label">Origin:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="origin" placeholder="Enter origin" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="destination" class="col-sm-4 col-form-label">Destination:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="destination" placeholder="Enter destination" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cost" class="col-sm-4 col-form-label">Cost:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="cost" placeholder="Enter cost" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="duration" class="col-sm-4 col-form-label">Duration:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="duration" placeholder="Enter duration" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="state" class="col-sm-4 col-form-label">State:</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="state" value="active">
                        <label class="form-check-label" for="state">
                            Active
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary" style="width: 45%;">Save</button>
                <button type="button" class="btn btn-outline-primary" style="width: 45%;">Cancel</button>
            </div>
        </form>
    </div>

</div>
<div class="modal fade" id="frequencyModal" tabindex="-1" aria-labelledby="frequencyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frequencyModalLabel">Add Frequency</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="frequencyTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Origin</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Cost</th>
                            <th scope="col">State</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="fas fa-check-circle fa-4x text-success"></i>
                <p class="mt-3">Frequency saved successfully</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>