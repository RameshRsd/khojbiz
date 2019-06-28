@section('footer')

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            {{--Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="#" target="_blank">Ganesh</a>--}}
                        </div>
                        <div class="col-sm-2 order-sm-1 py-1 text-center text-sm-left">
                            <a class="" href="https://khojbiz.com" target="_blank">Khoj Biz</a> &copy; <span data-toggle="year-copy">2018</span>
                        </div>
                        <div class="col-sm-8 order-sm-1 py-1 text-center text-sm-left">
                            <div class="f_kb_link">
                                <a class="" href="https://khojbiz.com" target="_blank">Emergency Number </a>
                                <a class="" href="{{url('buying-selling')}}" target="_blank">Buying & Selling</a>
                                <a class="" href="https://khojbiz.com" target="_blank">E-Catalog</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Buy-Directory </a>
                                <a class="" href="https://khojbiz.com" target="_blank">Feedback</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Privacy Policy</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Terms & Conditions</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Advertise With Us</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Carrers</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Book an Appointment</a>
                                <a class="" href="https://khojbiz.com" target="_blank">FAQ</a>
                                <a class="" href="https://khojbiz.com" target="_blank">Free Listing</a>
                            </div>
                        </div>
                        <div class="col-sm-2 order-sm-1 py-1 text-center text-sm-right">
                            <P>follow us:
                                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                <a href="#"> <i class="fab fa-linkedin"></i></a>
                                <a href="#"> <i class="fab fa-twitter"></i></a></P>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->


    <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
        <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-sm" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Apps</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <!-- CRM -->
                                    <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-speedometer fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                CRM
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END CRM -->
                                </div>
                                <div class="col-6">
                                    <!-- Products -->
                                    <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-rocket fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Products
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Products -->
                                </div>
                                <div class="col-6">
                                    <!-- Sales -->
                                    <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-plane fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Sales
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Sales -->
                                </div>
                                <div class="col-6">
                                    <!-- Payments -->
                                    <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-wallet fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Payments
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Payments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

    </div>
<!-- END Page Container -->
@yield('script')
            <script type="text/javascript">
                $('#place_name').autocomplete({
                    source:'{{url('place_name')}}',
                    minlength:1,
                    autoFocus:true,
                    select:function(e,ui)
                    {
                        $('#place_name').val(ui.item.value);
                    }
                });
            </script>

            <script src="{{url('public/frontend')}}/assets/js/oneui.core.min.js"></script>

<script src="{{url('public/frontend')}}/assets/js/oneui.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="{{url('public/frontend')}}/assets/js/plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Page JS Code -->
<script src="{{url('public/frontend')}}/assets/js/pages/be_pages_dashboard.min.js"></script>
<script src="{{url('public/frontend')}}/assets/js/plugins/slick-carousel/slick.min.js"></script>
<script src="{{url('public/frontend/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>

            {{--gallery images--}}
            <!-- Page JS Plugins -->
            <script src="{{url('public/frontend')}}/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

            <!-- Page JS Helpers (Magnific Popup Plugin) -->
            <script>jQuery(function(){ One.helpers('magnific-popup'); });</script>
            {{--gallery images--}}

            <!-- Page JS Helpers (Slick Slider Plugin) -->
<script>jQuery(function(){ One.helpers('slick','select2'); });</script>
            <script>jQuery(function(){ One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>


            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/5d15baf636eab9721119a6ae/default';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
            <!--End of Tawk.to Script-->
</body>
</html>

@endsection