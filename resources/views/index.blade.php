<!doctype html>
<html class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
    <!-- This is an example component -->
<div class="max-w-5xl mx-auto">

    <p class="mt-14 mb-5">Lista de empleados de Grupo Diapsa Actualizada a la fecha del 17 de junio del 2022.
    </p>

	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="px-6 py-3">
							Nombre
						</th>
						<th scope="col" class="px-6 py-3">
							Especialidad
						</th>
						<th scope="col" class="px-6 py-3">
							Ver en línea
						</th>
						<th scope="col" class="px-6 py-3">
							Ver QR
						</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($user as $user)
                    <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $user->name.' '.$user->last_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->speciality }}
                        </td>
                        <td class="px-6 py-4">
                            <a
                            href="{{ route('ver_usuario', $user->slug) }}"
                            class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline"
                          >
                            Ver tarjeta
                          </a>
                        </td>
                        <td class="px-6 py-4">

                            <a
                            href="{{ asset('qr/'.$user->slug.'_.jpg') }}"
                            download
                            class="border border-slate-500 bg-slate-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-slate-600 focus:outline-none focus:shadow-outline"
                             >
                            Descargar QR
                          </a>

                        </td>
                    </tr>
                    @endforeach


				</tbody>
			</table>
		</div>


		<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
	</div>
</body>
</html>
