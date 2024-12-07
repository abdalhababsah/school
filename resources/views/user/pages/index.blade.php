
@extends('user.layout.mainlayout')

@section('content')

    <main>
<style>
.swiper-slide {
    height: 125vh; /* Ensures all slides take up the full viewport height */
}
.your-class {
    background-repeat: no-repeat; /* Ensures the background does not repeat */
    background-position: center; /* Centers the background image */
    background-size: cover; /* Ensures the background image covers the entire container */
}


</style>
        <!-- BANNER SECTION START -->
        <section>
            <div class="ed-banner-slider swiper relative">
                <div class="swiper-wrapper">
                    <!-- الشريحة الأولى -->
                    <div class="swiper-slide">
                        <div style=" height: 125vh !important;" class="pt-[390px] md:pt-[300px] xs:pt-[280px] pb-[205px] bg-[url('../assets/img/banner-bg-1.jpg')] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                    <h2 class="font-bold text-[clamp(35px,4.57vw,80px)] leading-[1.13] mb-[15px]">
                                        "مدرسة زبدا الثانوية"

                                    </h2>
                                    <p class="leading-[1.75] mb-[41px]" style=" font-size: 20px !important;">
                                        "رؤيتنا لبيئة تعليمية عادلة وصحية تلبي احتياجات الجميع."

                                    </p>
                                    <div class="flex items-center gap-[20px]">
                                        <a href="#" class="ed-btn"> تعرف على رسالتنا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- الشريحة الثانية -->
                    <div class="swiper-slide">
                        <div class="pt-[390px] md:pt-[300px] xs:pt-[280px] pb-[205px] bg-[url('../assets/img/banner-bg-2.jpg')] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                    <h2 class="font-bold text-[clamp(35px,4.57vw,80px)] leading-[1.13] mb-[15px]">
                                        "مرحلة جديدة من التعليم تبدأ بفهم احتياجات طلابنا."
                                    </h2>
                                    <p class="leading-[1.75] mb-[41px]" style=" font-size: 20px !important;">
                                        "معًا لنكتشف صعوبات التعلم ونبني مستقبلًا أفضل."
                                    </p>
                                    <div class="flex items-center gap-[20px]">
                                        <a href="#" class="ed-btn">ابدأ التشخيص الآن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- الشريحة الثالثة -->
                    <div class="swiper-slide">
                        <div  style="background: url('../assets/img/banner-bg-3.jpg')!important;background-repeat: no-repeat !important ;   background-size: cover !important; background-position: center !important;" class="pt-[390px] md:pt-[300px] xs:pt-[280px] pb-[205px] bg-[url('../assets/img/banner-bg-3.jpg')] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                    <h2 class="font-bold text-[clamp(35px,4.57vw,80px)] leading-[1.13] mb-[15px]">
                                        "فريقنا المتخصص من المعلمات"
                                    </h2>
                                    <p class="leading-[1.75] mb-[41px]"style=" font-size: 20px !important;">
                                        "يعمل من أجل تطوير قدرات الطلاب وتحقيق أهداف التعليم الشامل."
                                    </p>
                                    <div class="flex items-center gap-[20px]" >
                                        <a href="#" class="ed-btn">تعرف على فريق العمل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- BANNER SECTION END -->



        <!-- CATEGORIES SECTION START -->
        <div class="ed-2-categories -mt-[98px] relative z-[2]">
            <div class="mx-[15.8%] xxxl:mx-[9.8%] xxl:mx-[3.5%] bg-white p-[40px] sm:p-[30px] xxs:p-[20px] rounded-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
                <div class="grid grid-cols-3 md:grid-cols-2 xxs:grid-cols-1 gap-[20px]">
                    <!-- single category -->
                    <a href="course-grid.html" class="border border-[#e5e5e5] rounded-[10px] py-[16px] px-[20px] flex sm:flex-col items-center sm:items-start gap-y-[15px] gap-x-[20px] hover:bg-[#F8B81F] hover:border-[#F8B81F] group">
                        <!-- icon -->
                        <div class="bg-[#F8B81F] shrink-0 w-[84px] sm:w-[64px] aspect-square rounded-full p-[14px] duration-[400ms] flex items-center justify-center group-hover:bg-white">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 2C2.9 2 2 2.9 2 4V28C2 29.1 2.9 30 4 30H28C29.1 30 30 29.1 30 28V4C30 2.9 29.1 2 28 2H4ZM8 6H24V10H8V6ZM8 14H12V18H8V14ZM14 14H18V18H14V14ZM20 14H24V18H20V14ZM8 20H12V24H8V20ZM14 20H18V24H14V20ZM20 20H24V24H20V20Z" class="fill-white group-hover:fill-[#F8B81F]" />
                            </svg>
                        </div>

                        <!-- text -->
                        <div>
                            <h5 class="font-semibold text-[20px] text-edblue duration-[400ms] group-hover:text-white">رياضيات</h5>
                        </div>
                    </a>

                    <!-- single category -->
                    <a href="course-grid.html" class="border border-[#e5e5e5] rounded-[10px] py-[16px] px-[20px] flex sm:flex-col items-center sm:items-start gap-y-[15px] gap-x-[20px] hover:bg-[#39C0FA] hover:border-[#39C0FA] group">
                        <!-- icon -->
                        <div class="bg-[#39C0FA] shrink-0 w-[84px] sm:w-[64px] aspect-square rounded-full p-[14px] duration-[400ms] flex items-center justify-center group-hover:bg-white">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 15.4469 31.977 14.8994 31.9314 14.3588C30.712 14.7788 29.4112 15 28 15C21.3726 15 16 9.62742 16 3C16 1.5888 16.2212 0.287952 16.6412 -0.931432C16.1006 -0.977027 15.5531 -1 15 -1C6.16344 -1 0 6.16344 0 15C0 23.8366 6.16344 31 15 31C23.8366 31 31 24.8366 31 16C31 14.8974 30.9296 13.8356 30.8882 14.0306C29.6798 14.4456 28.3901 14.6538 27.0583 14.6538C21.1145 14.6538 16.3462 9.88551 16.3462 3.94166C16.3462 2.60988 16.5544 1.32021 16.9694 0.11184C16.3214 0.0384167 15.669 0 15 0Z" class="group-hover:fill-[#39c0fa] fill-white" />
                            </svg>
                        </div>

                        <!-- text -->
                        <div>
                            <h5 class="font-semibold text-[20px] text-edblue duration-[400ms] group-hover:text-white">عربي</h5>
                        </div>
                    </a>

                    <!-- single category -->
                    <a href="course-grid.html" class="border border-[#e5e5e5] rounded-[10px] py-[16px] px-[20px] flex sm:flex-col items-center sm:items-start gap-y-[15px] gap-x-[20px] hover:bg-[#F92596] hover:border-[#F92596] group">
                        <!-- icon -->
                        <div class="bg-[#F92596] shrink-0 w-[84px] sm:w-[64px] aspect-square rounded-full p-[14px] duration-[400ms] flex items-center justify-center group-hover:bg-white">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M16.5 2C15.6716 2 15 2.67157 15 3.5V18H12C11.4477 18 11 18.4477 11 19V22H25V19C25 18.4477 24.5523 18 24 18H21V3.5C21 2.67157 20.3284 2 19.5 2H16.5Z" class="fill-white group-hover:fill-[#f92596]" />
                                    <path d="M8 23H28C28.5523 23 29 23.4477 29 24V26H7V24C7 23.4477 7.44772 23 8 23Z" class="fill-white group-hover:fill-[#f92596]" />
                                    <circle cx="18" cy="29" r="4" class="fill-white group-hover:fill-[#f92596]" />
                                </g>
                            </svg>
                        </div>

                        <!-- text -->
                        <div>
                            <h5 class="font-semibold text-[20px] text-edblue duration-[400ms] group-hover:text-white">علوم</h5>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- CATEGORIES SECTION END -->
        <!-- ABOUT SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px]" dir="rtl">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">
                    <!-- img -->
                    <div class="max-w-[50%] md:max-w-full grow relative">
                        <img src="assets/img/about-img.png" alt="صورة عن المدرسة">
                        <img src="assets/img/about-img-vector.svg" alt="رمز" class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
                    </div>

                    <!-- txt -->
                    <div class="max-w-[50%] md:max-w-full shrink-0 grow">

                        <h6 class="ed-section-sub-title"   style="margin-right: 47px;">من نحن</h6>
                        <h2 class="ed-section-title mb-[9px]">مرحباً بكم في مدرسة زبدا الثانوية المختلطة</h2>
                        <p class="text-edgray">مدرسة زبدا الثانوية المختلطة تسعى لتحقيق بيئة تعليمية عادلة وصحية، تعزز من إمكانيات جميع الطلاب وتراعي الفروق الفردية.</p>



                    </div>
                </div>
            </div>
        </section>
        <section class="bg-edoffwhite py-[120px] xl:py-[80px] md:py-[60px]" dir="rtl" style="margin-bottom: 10vh; margin-top:10vh">

            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex flex-col justify-between items-center gap-y-[40px]">
                    <div class="text-center mb-[46px] lg:mb-[36px] md:mb-[26px]">
                        <h2 class="ed-section-sub-title">رسالتنا ورؤيتنا </h2>
                        <h6 class="ed-section-title">رسالتنا ورؤيتنا</h6>
                    </div>
                    <!-- Text Section -->
                    <div class="w-full ">
                        <!-- Additional Info Section -->
                        <div class="flex flex-row gap-y-[30px] gap-x-[40px] justify-center items-center">
                            <!-- Single Info (رسالتنا) -->
                            <div class="flex flex-col items-center text-center gap-[15px] max-w-[45%]">
                                <div class="shrink-0 bg-edpurple h-[100px] aspect-square rounded-[8px] flex items-center justify-center">
                                    <img src="assets/img/icon/target.svg" alt="هدفنا" class="w-[50%]">
                                </div>
                                <div>
                                    <h6 class="font-bold text-[30px] text-edblue mb-[10px] leading-[1.4]">رسالتنا</h6>
                                    <p class="text-[24px] text-edgray leading-[1.8]">إعداد طلبة ناجحين من خلال استراتيجيات مبتكرة تواكب احتياجات التعليم الحديث.</p>
                                </div>
                            </div>

                            <!-- Single Info (رؤيتنا) -->
                            <div class="flex flex-col items-center text-center gap-[15px] max-w-[45%]">
                                <div class="shrink-0 bg-edpurple h-[100px] aspect-square rounded-[8px] flex items-center justify-center">
                                    <img src="assets/img/icon/book-light.svg" alt="رؤيتنا" class="w-[50%]">
                                </div>
                                <div>
                                    <h6 class="font-bold text-[30px] text-edblue mb-[10px] leading-[1.4]">رؤيتنا</h6>
                                    <p class="text-[24px] text-edgray leading-[1.8]">تعزيز فرص التعليم الشامل والارتقاء بالمستوى التعليمي للمجتمع.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- INSTRUCTORS SECTION START -->
<section class="bg-edoffwhite py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden" dir="rtl">
    <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
        <!-- heading -->
        <div class="text-center mb-[46px] lg:mb-[36px] md:mb-[26px]">
            <h2 class="ed-section-sub-title">فريق العمل</h2>
            <h6 class="ed-section-title">فريقنا من الخبراء</h6>
        </div>

        <!-- instructor cards -->
        <div class="grid grid-cols-4 sm:grid-cols-3 xs:grid-cols-2 xxs:grid-cols-1 gap-[30px] md:gap-[15px]">
            <!-- single instructor -->
            <div class="text-center group">
                <!-- img -->
                <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                    <img src="assets/img/instructor-1.jpg" alt="هدى التركية" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                </div>

                <!-- txt -->
                <div>
                    <h6 class="font-semibold text-[18px] text-edblue mb-[12px]">هدى التركية</h6>
                    <span class="text-edgray">معلمة المرحلة الأساسية (الصف الأول)</span>
                </div>
            </div>

            <!-- single instructor -->
            <div class="text-center group">
                <!-- img -->
                <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                    <img src="assets/img/instructor-2.jpg" alt="أسماء الجويفل" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                </div>

                <!-- txt -->
                <div>
                    <h6 class="font-semibold text-[18px] text-edblue mb-[12px]">أسماء الجويفل</h6>
                    <span class="text-edgray">معلمة المرحلة الأساسية (الصف الثاني)</span>
                </div>
            </div>

            <!-- single instructor -->
            <div class="text-center group">
                <!-- img -->
                <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                    <img src="assets/img/instructor-3.jpg" alt="ياسمين الدعجة" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                </div>

                <!-- txt -->
                <div>
                    <h6 class="font-semibold text-[18px] text-edblue mb-[12px]">ياسمين الدعجة</h6>
                    <span class="text-edgray">معلمة الفيزياء</span>
                </div>
            </div>

            <!-- single instructor -->
            <div class="text-center group">
                <!-- img -->
                <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                    <img src="assets/img/instructor-4.jpg" alt="عبير السكارنة" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                </div>

                <!-- txt -->
                <div>
                    <h6 class="font-semibold text-[18px] text-edblue mb-[12px]">عبير السكارنة</h6>
                    <span class="text-edgray">معلمة الرياضيات</span>
                </div>
            </div>
        </div>

        <!-- vectors -->
        <div class="lg:hidden">
            <div class="pointer-events-none w-[434px] aspect-square rounded-full bg-edpurple/15 absolute -z-[1] top-0 left-[56px] -translate-y-[50%]"></div>
            <div class="pointer-events-none w-[694px] aspect-square rounded-full bg-edpurple/10 absolute -z-[1] bottom-0 right-[21px] translate-y-[50%]"></div>
            <img src="assets/img/admission-vector-2.svg" alt="vector" class="absolute -z-[1] bottom-[154px] right-[58px]">
            <img src="assets/img/instructor-vector.svg" alt="vector" class="absolute -z-[1] top-[120px] left-0">
        </div>
    </div>
</section>
<!-- INSTRUCTORS SECTION END -->
<!-- BLOG SECTION START -->
<section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden" dir="rtl">
    <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
        <!-- heading -->
        <div class="text-center mb-[46px] md:mb-[30px]">
            <h6 class="ed-section-sub-title">خدمات الموقع</h6>
            <h2 class="ed-section-title">أحدث الخدمات لدينا</h2>
        </div>

        <!-- service cards -->
        <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xs:max-w-[65%] xxs:max-w-full xs:mx-auto gap-[30px] lg:gap-[20px] sm:gap-[15px]">
            <!-- single service -->
            <div class="et-service bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                <div class="et-service__txt">
                    <h4 class="et-service__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">تشخيص صعوبات التعلم في القراءة والحساب</h4>
                    <p class="text-edgray text-[16px]">تقديم تشخيص دقيق ومبني على أسس علمية لتحديد صعوبات التعلم في مهارات القراءة والحساب الأساسية.</p>
                </div>
            </div>

            <!-- single service -->
            <div class="et-service bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                <div class="et-service__txt">
                    <h4 class="et-service__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">تقارير تفصيلية للطلاب لتحديد الاحتياجات التعليمية</h4>
                    <p class="text-edgray text-[16px]">إعداد تقارير شاملة لكل طالب تحتوي على توصيات تعليمية تساعد على تحقيق أهداف التعلم.</p>
                </div>
            </div>

            <!-- single service -->
            <div class="et-service bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                <div class="et-service__txt">
                    <h4 class="et-service__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">استراتيجيات دعم خاصة مصممة لكل طالب</h4>
                    <p class="text-edgray text-[16px]">تصميم خطط دعم فردية وفقًا لاحتياجات الطالب لضمان تحقيق أقصى قدر من التحصيل الدراسي.</p>
                </div>
            </div>
        </div>




    </div>
</section>
<!-- BLOG SECTION END -->
<!-- CTA 2 SECTION START -->
<section class="mt-[120px] xl:mt-[80px] md:mt-[60px]" dir="rtl">
    <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px] bg-[url('../assets/img/cta-3-bg.jpg')] bg-no-repeat bg-cover bg-center rounded-[20px] overflow-hidden text-center py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] before:absolute before:inset-0 before:bg-edpurple/80 before:-z-[1]">
        <div class="max-w-[570px] mx-auto">
            <h6 class="ed-section-sub-title ed-section-sub-title--white ml-[48px]">رسالتنا التعليمية</h6>
            <h2 class="ed-section-title !text-white mb-[18px]">خلق بيئة تعليمية تفاعلية تشجع أولياء الأمور والمجتمع المحلي على المساهمة في بناء مستقبل طلابنا</h2>
        </div>
    </div>
</section>
<!-- CTA 2 SECTION END -->



        <!-- COURSES SECTION START -->
        <section class="ed-2-courses py-[120px] xl:py-[80px] md:py-[60px]">

        </section>
        <!-- COURSES SECTION END -->



        </div>
    </main>
    @if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'خطأ',
            text: '{{ session('error') }}',
            confirmButtonText: 'حسناً'
        });
    </script>
@endif
@endsection
