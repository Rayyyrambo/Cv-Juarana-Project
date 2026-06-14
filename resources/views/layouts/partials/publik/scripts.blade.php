  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 {{-- / <script src="{{ asset('public/js/modal.js') }}"></script> --}}
 @vite('resources/js/modal.js');
 @vite('resources/js/dataModal.js');
  <script>
    AOS.init({
       once: true,
    });
  </script>