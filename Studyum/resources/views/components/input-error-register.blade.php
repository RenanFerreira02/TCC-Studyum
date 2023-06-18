@props(['messages']) 

@if ($messages == true)
    <ul id="error" {{ $attributes->merge(['style' => 'margin-top: 0.25rem;color: #DC2626; font-size: 0.875rem;line-height: 1.25rem; ']) }}> 
        @foreach ((array) $messages as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>

    <script>
        Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: "error",
            title: "Usuário não cadastrado!",
        });
    </script>
@endif

