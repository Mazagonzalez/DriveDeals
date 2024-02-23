<div id="nav" class="z-50 flex justify-center" style="background-color: rgb(59, 130, 246)">
    <div class="shadow-input row">
        <div class="px-5 py-2 bg-secondary">
            <div class="gap-5 row">
                <p class="text-sm w-[75px] text-center font-semibold">{{ __('Language') }}</p>

                <div class="row gap-2.5">
                    <a href="{{ url('locale/en') }}" class="border-[3px] border-transparent rounded-full hover:border-primary">
                        <img src="{{ asset('dist/icons/en.png') }}" class="w-5 h-5">
                    </a>

                    <a href="{{ url('locale/es') }}" class="border-[3px] border-transparent rounded-full hover:border-primary">
                        <img src="{{ asset('dist/icons/es.png') }}" class="w-5 h-5">
                    </a>
                </div>
            </div>
        </div>
        <button onclick="enabled()" class="px-5 py-2 cursor-pointer bg-slate-800 hover:bg-white fill-white hover:fill-slate-800">
            <x-utils.icons.pin  style="w-5 h-5" />
        </button>
    </div>

    <script>
        // Función para cambiar el div
        function enabled() {
            var nav = document.getElementById('nav');

            // Toggle color y posición
            if (nav.style.backgroundColor === 'rgb(59, 130, 246)')
            {
                nav.style.backgroundColor = 'transparent';
                nav.style.position = 'fixed';
                nav.style.left = '50%'
                nav.style.transform = 'translateX(-50%)';
            } else {
                nav.style.backgroundColor = 'rgb(59, 130, 246)';
                nav.style.position = 'relative';
                nav.style.left = '0%'
                nav.style.transform = 'translateX(0%)';
            }

            // Guardar estado en el almacenamiento local
            localStorage.setItem('divColor', nav.style.backgroundColor);
            localStorage.setItem('divPosition', nav.style.position);
            localStorage.setItem('divLeft', nav.style.left);
            localStorage.setItem('divTransform', nav.style.transform);
        }

        // Función para establecer el estado del div al cargar la página
        window.onload = function() {
            var nav = document.getElementById('nav');
            var storedColor = localStorage.getItem('divColor');
            var storedPosition = localStorage.getItem('divPosition');
            var storedLeft = localStorage.getItem('divLeft');
            var storedTransform = localStorage.getItem('divTransform');

            // Si hay un color almacenado, lo aplicamos al div
            if (storedColor) {
                nav.style.backgroundColor = storedColor;
            }

            // Si hay una posición almacenada, la aplicamos al div
            if (storedPosition) {
                nav.style.position = storedPosition;
            }

            if (storedLeft) {
                nav.style.left = storedLeft;
            }

            if (storedTransform) {
                nav.style.transform = storedTransform;
            }
        };
    </script>
</div>

