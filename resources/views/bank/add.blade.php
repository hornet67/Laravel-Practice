<div id="addModal" class="modal-container">
    <div class="modal-subject" style="width: 40%;">
        <div class="modal-heading banner">
            <div class="center">
                <h3>Add {{ $name }}</h3>
                <span class="close-modal" data-modal-id="addModal">&times;</span>
            </div>
        </div>


        <!-- form start -->
        <form id="AddForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            {{-- name --}}
            <div class="form-input-group">
                <label for="name">Bank Name <span class="required" title="Required">*</span></label>
                <input type="text" name="name" class="form-input" id="name">
                <span class="error" id="name_error"></span>
            </div>
            {{-- phone  --}}
            <div class="form-input-group">
                <label for="phone">Phone <span class="required" title="Required">*</span></label>
                <input type="text" name="phone" class="form-input" id="phone">
                <span class="error" id="phone_error"></span>
            </div>
            {{-- address  --}}
            <div class="form-input-group">
                <label for="address">Address <span class="required" title="Required">*</span></label>
                <input type="text" name="address" class="form-input" id="address">
                <span class="error" id="address_error"></span>
            </div>
            <div class="center">
                <button type="submit" class="btn-blue" id="Insert">Submit</button>
            </div>
        </form>
    </div>
</div>