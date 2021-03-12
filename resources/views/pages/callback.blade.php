@if (is_array($posts) || is_object($posts))
<div class="{{ url()->current() == url('/') ? 'nexcom_call_action' : 'nexcom_call_action_home' }} position-relative bg--cart-11">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                <div class="about__inner ptb--40">
                    <div class="section__title--call">
                                @foreach($posts as $post)
                                    @if($post['id']==7)
                                    {!!$post['title']!!}

                        {!!$post['description']!!}
                                 @endif
                                 @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mt--20" style="background: #ebebeb">
                <div class="about__inner ptb--20 pl-3">
                    <div class="section__title--call">
                              @foreach($posts as $post)
                                    @if($post['id']==8)
                        {!!$post['title']!!}
                                     @endif
                                 @endforeach
                        <form id="contact-formm" role="form" class="form-inline" action="{{ url('/callback') }}" method="get">
                            @csrf
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="text" name="fname" class="form-control" id="inputCity" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" name="sname" class="form-control" id="inputZip" placeholder="Second Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="tel" class="form-control" id="inputZip" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label class="form_interest font-weight-bold" for="">
                                            Interested in Internet Access
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" name="internet[]" value="Internet for Home" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                For Home
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" name="internet[]" value="Internet for Business" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                For Business
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input"  name="internet[]" value="Nexcom Wifi" type="checkbox" id="gridCheck2" checked>
                                            <label class="form-check-label" for="gridCheck2">
                                                Nexcom WiFi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-6 ">
                                            {!! app('captcha')->display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="call_back_btn " style="width: 90px;" type="submit">Send</button>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
