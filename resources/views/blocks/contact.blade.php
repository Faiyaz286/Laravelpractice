<div class="form-group mb-3">
    <input type="text" placeholder="Name*" id="name" class="form-control" name="name"  required autofocus>
    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
</div>

<div class="form-group mb-3">
    <input type="text" placeholder="Email*" id="email-address" class="form-control" name="email" required autofocus>
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
</div>
<div class="form-group mb-3">
    <input type="text" placeholder="Phone/mobile" id="mobile" class="form-control" name="mobile"  autofocus>
    @if ($errors->has('mobile'))
    <span class="text-danger">{{ $errors->first('mobile') }}</span>
    @endif
</div>

<div class="form-group mb-3">
    <textarea  placeholder="Message/Comments/Question" id="comment" class="form-control" name="comment"  rows="4" required autofocus></textarea>
    @if ($errors->has('mobile'))
    <span class="text-danger">{{ $errors->first('comment') }}</span>
    @endif
</div>

<div class="d-grid mx-auto">
    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
</div>