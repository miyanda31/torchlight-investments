


<form wire:submit.prevent="sendEmail">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">

                <input wire:keydown="clearErrors"  wire:model="name" type="text" class="form-control mb-1" id="name" placeholder="Full Name" >
            @error('name')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <fieldset>
                <input wire:keydown="clearErrors"  wire:model="email" type="text" class="form-control mb-1" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" >
            </fieldset>
            @error('name')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <fieldset>
                <input wire:keydown="clearErrors" wire:model="title" type="text" class="form-control mb-1" id="subject" placeholder="Subject" >
            </fieldset>
            @error('title')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
        <div class="col-lg-12 mb-2">
            <fieldset>
                <textarea wire:keydown="clearErrors" wire:model="message" rows="10" class="form-control mb-1" id="message" placeholder="Your Message" ></textarea>
            </fieldset>
            @error('message')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
        <div class="col-lg-12 text-center">
            <fieldset>
                <button type="submit" id="form-submit" class="filled-button">
                    <div wire:loading class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <span wire:loading class="ml-3">Sending...</span>
                    <span wire:loading.remove>Send Message</span>
                </button>
            </fieldset>
        </div>
    </div>
</form>
