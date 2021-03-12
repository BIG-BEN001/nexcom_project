
  @extends('layouts.default4')
  @section('content')
    <div class="tec_page">
    <!-- Start Bradcaump area -->
    <div class="pr__bradcaump__area pr__bradcaump__home bg-image--home_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                        <h2 class="bradcaump-title">Pesatel</h2>
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p style="line-height: 40px;"><span style="font-size: 16px;">Thank You For Your Order</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <br><br><br>
    <div id="total_price_header" class="text-center"> </div>
    <div class="container">

        pesatel
        </div >
    </div>

    <br><br><br><br>
    <script>
    $(document).ready(function(){
        pesatel();
        fetchRecord();
    });
    </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://partners.pesatel.com/checkout/lin/pesatel.js"></script>
<script type="text/javascript" src="{{ asset('js/tecshop.js') }}"></script>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->




@stop
