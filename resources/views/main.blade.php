<x-app-layout>
    <div x-data="{ open: false }">
        <button @click="open = true">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>

    no se te olvide que siempre para que corra debes prender laragon y luego poner el npm run dev ok
</x-app-layout>
