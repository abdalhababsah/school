  <!-- FOOTER SECTION START -->
  <footer
  style="background-color: #27703b"
      class=" relative z-[1] before:absolute before:inset-0 before:-z-[1]  before:opacity-[7%] before:bg-no-repeat before:bg-cover before:bg-center text-white">
      <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
          <!-- footer top -->
          <div class="flex flex-wrap justify-between gap-[35px] pt-[100px] pb-[58px] border-b border-white/20">
              <!-- footer about -->
              <div class=" xxs:max-w-full"
                  style="display: flex;justify-content: space-between; width: 100%;">
                 
                  <div>
                      <p class="text-[#D9D9D9] mb-[19px]">"تعلم اليوم، لتكون قائد المستقبل! استكشف عالماً مليئاً بالفرص
                          مع
                          منصتنا التعليمية الممتعة للأطفال."</p>

                      <ul class="space-y-[17px]">
                          <li class="flex items-center gap-[8px]">
                              <span class="icon"><img src="{{asset('assets/img/call-icon-yellow.svg')}}" alt="icon"></span>
                              <a href="tel:+6108-666-0112" class="hover:text-edyellow">+6108-666-0112</a>
                          </li>

                          <li class="flex items-center gap-[8px]">
                              <span class="icon"><img src="{{asset('assets/img/message-yellow.svg')}}" alt="icon"></span>
                              <a href="mailto:info@gmail.com" class="hover:text-edyellow">info@gmail.com</a>
                          </li>
                      </ul>
                  </div>
                  <a href="index.html" class="inline-block mb-[23px]">
                    <img src="{{asset('assets/img/logo 05 (1).jpeg')}}" alt="logo"></a>
              </div>
          </div>
          <div class="text-center text-[#d9d9d9]  pb-[20px] mt-[30px]">
            <p class="text-sm">
                &copy; 2024 جميع الحقوق محفوظة لمنصة التعلم
            </p>
        </div>
      </div>
  </footer>
  <!-- FOOTER SECTION END -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
      @if (session('resetTimer'))
          // Clear localStorage if resetTimer is set
          localStorage.removeItem('timeRemaining');
          localStorage.removeItem('timeRemainingMathSec');
      @endif
      @if (session('sweet_alert'))
          Swal.fire({
              icon: '{{ session('sweet_alert.type') }}', // success or error
              title: '{{ session('sweet_alert.title') }}',
              html: '{{ session('sweet_alert.message') }}', // Use 'html' to include line breaks
              confirmButtonText: 'موافق'
          });
      @endif
      function confirmExamStart(button) {
          const route = button.getAttribute('data-route');
          Swal.fire({
              title: 'هل أنت متأكد؟',
              text: "ستبدأ الاختبار الآن.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'نعم، ابدأ الاختبار!',
              cancelButtonText: 'إلغاء'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Redirect to the specified route
                  window.location.href = route;
              }
          });
      }
  </script>
  <!-- js -->
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/fslightbox/fslightbox.js')}}"></script>
  <script src="{{asset('assets/vendor/mixitup/mixitup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/slim-select/slimselect.min.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- <script src="assets/js/header-2.js"></script> -->
  <script src="{{asset('assets/js/accordion.js')}}"></script>
  </body>

  </html>
