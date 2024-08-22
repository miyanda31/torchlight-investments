<form wire:submit.prevent="sendQuotation"action="forms/contact.php" method="post" role="form" class="php-email-form">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Your Name</label>
            <input type="text"  wire:model="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            @error('name')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror

        </div>
        <div class="form-group col-md-6">
            <label for="name">Your Email</label>
            <input type="email" class="form-control"  wire:model="email" id="email"  />
                   @error('email')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="name">Phone Number</label>
        <input type="text" class="form-control"  wire:model="phone" id="subject"  data-msg="Please enter at least 8 chars of subject" />
               @error('phone')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
    </div>
    <div class="col-md-6 custom-control custom-checkbox mr-sm-2 form-check-inline">
        <input  type="checkbox" wire:model="whatsapp_required" class="custom-control-input" id="customControlAutosizing32">
        <label class="custom-control-label" for="customControlAutosizing32">My number is also on Whatsapp</label>
    </div>
    <br>
    <label for="name">Products interested</label>
        @error('services')
        <div class="col-md-12"><small style="color: #c51122"><strong>{{$message}}</strong></small></div>
        @enderror
    <div class="col-md-6 custom-control custom-checkbox mr-sm-2 form-check-inline">
        <input wire:model="services" value="Web Design" type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">Web Design</label>
    </div>
    <div class="col-md-6 custom-control custom-checkbox mr-sm-2 form-check-inline">
        <input wire:model="services" value="Web Hosting" type="checkbox" class="custom-control-input" id="customControlAutosizing2">
        <label class="custom-control-label" for="customControlAutosizing2">Web Hosting</label>
    </div>
    <div class=" form-check custom-control custom-checkbox mr-sm-2 form-check-inline">
        <input wire:model="services" value="Mobile Application" type="checkbox" class="custom-control-input" id="customControlAutosizing3">
        <label class="custom-control-label" for="customControlAutosizing3">Mobile Application</label>
    </div>
    <div class=" form-check custom-control custom-checkbox mr-sm-2 form-check-inline">
        <input wire:model="services" value="Email Hosting" type="checkbox" class="custom-control-input" id="customControlAutosizing4">
        <label class="custom-control-label" for="customControlAutosizing4">Email Hosting</label>
    </div>
        @if(session('status'))
            <div class="sent-message">Your message has been sent. Thank you!</div>
        @endif
        <div wire:errors class="error-message">Please choose at least one product</div>
    <div class="text-center">
        <button type="submit">
                Request
        </button>
    </div>
</form>

