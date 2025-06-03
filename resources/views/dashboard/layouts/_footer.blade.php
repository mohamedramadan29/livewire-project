<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="flex-wrap py-2 container-xxl d-flex justify-content-between flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Mohamed Ramadan</a>
        </div>
        <div>
            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                Themes</a>

            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                class="footer-link me-4">Documentation</a>

            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                class="footer-link me-4">Support</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/dashboard/') }}/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('assets/dashboard/') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('assets/dashboard/') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('assets/dashboard/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('assets/dashboard/') }}/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/dashboard/') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('assets/dashboard/') }}/assets/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('assets/dashboard/') }}/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('morph.updated', ({
            el,
            component
        }) => {
            const MySuccessAlert = document.querySelector('.success-alert');
            if (MySuccessAlert) {
                MySuccessAlert.style.display = 'block';
                setTimeout(() => {
                    MySuccessAlert.style.display = 'none';
                }, 3000);
            }
        })

    });
</script>
</body>

</html>
