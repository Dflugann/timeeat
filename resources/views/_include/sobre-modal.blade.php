<!-- Modal -->
<div class="modal modal-danger fade" id="@yield('modal-name')" tabindex="-1" role="dialog" aria-labelledby="@yield('modal-name')" aria-hidden="true">
    <div class="@yield('modal-dialog')" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="@yield('modal-name')">@yield('modal-title')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #f05f40!important">

                <div class="text-center">
                    <h2 class="section-heading text-white">@yield('modal-body-title')</h2>
                    @yield('modal-body')
                </div>

            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>