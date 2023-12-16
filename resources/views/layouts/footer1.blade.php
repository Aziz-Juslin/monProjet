       <!--  -->


    <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Voir plus
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                       {{Auth::user()->ecole}} / {{Auth::user()->province}}
                    </span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a  class="navbar-nav-link" target="_blank"><i class="icon-calendar mr-2"></i> {{AnneeScolaire()}}</a></li>

                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


</body>
</html>
