 {{-- <!-- Footer Start -->
<div class="container-fluid px-4">
    <div class="bg-light rounded-top p-4 fixed-bottom">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                <br>
                Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End --> --}}



        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Success Message -->
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'نجاح',
                text: '{{ session('success') }}',
                confirmButtonText: 'حسنًا'
            });
        </script>
    @endif

    <!-- Error Messages -->
    @if ($errors->any())
        <script>
            let errorMessages = `
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            `;
            Swal.fire({
                icon: 'error',
                title: 'خطأ',
                html: errorMessages, // Display all errors
                confirmButtonText: 'حسنًا'
            });
        </script>
    @endif
    <!-- JavaScript Libraries -->
   <!-- External JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('admin/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('admin/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
