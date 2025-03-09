<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CLIENTES-FAQI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold mb-6">Clientes</h2>

        <!-- Alertas -->
        <div id="alert-success" class="hidden bg-green-500 text-white p-4 rounded-lg mb-6">
            <p id="alert-success-message"></p>
        </div>
        <div id="alert-error" class="hidden bg-red-500 text-white p-4 rounded-lg mb-6">
            <p id="alert-error-message"></p>
        </div>

        <!-- Tabela de clientes -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 rounded-lg">
                <thead>
                    <tr class="w-full bg-gray-700 text-left text-gray-300">
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Nome</th>
                        <th class="py-3 px-4">Logradouro</th>
                        <th class="py-3 px-4">Número</th>
                        <th class="py-3 px-4">Complemento</th>
                        <th class="py-3 px-4">Bairro</th>
                        <th class="py-3 px-4">Cidade</th>
                        <th class="py-3 px-4">UF</th>
                        <th class="py-3 px-4">CEP</th>
                        <th class="py-3 px-4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr class="border-b border-gray-700">
                        <!-- Formulário de Atualização -->
                        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="w-full update-form">
                            @csrf
                            @method('PUT')
                            <td class="py-3 px-4">{{ $cliente->id }}</td>
                            <td class="py-3 px-4"><input type="text" name="nome" value="{{ $cliente->nome }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="logradouro" value="{{ $cliente->logradouro }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="numero" value="{{ $cliente->numero }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="complemento" value="{{ $cliente->complemento }}" class="bg-gray-700 text-white rounded-lg p-2 w-full"></td>
                            <td class="py-3 px-4"><input type="text" name="bairro" value="{{ $cliente->bairro }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="cidade" value="{{ $cliente->cidade }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="uf" value="{{ $cliente->uf }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="cep" value="{{ $cliente->cep }}" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4 flex space-x-2">
                                <button type="submit" class="text-yellow-500"><i class="fas fa-edit"></i></button>
                        </form>
                        <!-- Formulário de Exclusão -->
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500"><i class="fas fa-trash"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach

                    <!-- Formulário para Criar Novo Cliente -->
                    <tr class="border-b border-gray-700">
                        <form action="/clientes/store" method="POST" class="w-full" id="createForm">
                            @csrf
                            <td class="py-3 px-4"></td>
                            <td class="py-3 px-4"><input type="text" name="nome" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="logradouro" id="logradouro" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="numero" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="complemento" class="bg-gray-700 text-white rounded-lg p-2 w-full"></td>
                            <td class="py-3 px-4"><input type="text" name="bairro" id="bairro" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="cidade" id="cidade" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="uf" id="uf" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4"><input type="text" name="cep" id="cep" class="bg-gray-700 text-white rounded-lg p-2 w-full" required></td>
                            <td class="py-3 px-4">
                                <button type="submit" class="text-green-500"><i class="fas fa-save"></i></button>
                            </td>
                        </form>
                    </tr>

                    <!-- Formulário para Consultar CEP -->
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4"></td>
                        <td class="py-3 px-4">
                            <input type="text" name="cepConsulta" id="cepConsulta" class="bg-gray-700 text-white rounded-lg p-2 w-full" placeholder="Informe o CEP">
                        </td>
                        <td class="py-3 px-4">
                            <button type="button" id="buscarCEP" class="text-blue-500"><i class="fas fa-search"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#buscarCEP').on('click', function() {
                let cep = $('#cepConsulta').val();
                if (cep) {
                    $.ajax({
                        url: `https://viacep.com.br/ws/${cep}/json/`,
                        method: 'GET',
                        success: function(response) {
                            if (!response.erro) {
                                $('#logradouro').val(response.logradouro);
                                $('#bairro').val(response.bairro);
                                $('#cidade').val(response.localidade);
                                $('#uf').val(response.uf);
                                $('#cep').val(response.cep);
                            } else {
                                showAlert('error', 'CEP não encontrado!');
                            }
                        },
                        error: function() {
                            showAlert('error', 'Erro ao buscar o CEP');
                        }
                    });
                } else {
                    showAlert('error', 'Por favor, insira um CEP.');
                }
            });

            $('.update-form').on('submit', function(event) {
                event.preventDefault();
                let form = $(this);
                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Você deseja editar este cliente?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, editar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: form.attr('action'),
                            method: form.attr('method'),
                            data: form.serialize(),
                            success: function(response) {
                                Swal.fire(
                                    'Editado!',
                                    'O cliente foi editado com sucesso.',
                                    'success'
                                );
                            },
                            error: function() {
                                Swal.fire(
                                    'Erro!',
                                    'Erro ao editar o cliente.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            $('.delete-form').on('submit', function(event) {
                event.preventDefault();
                let form = $(this);
                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Você não poderá reverter isso!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, excluir!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: form.attr('action'),
                            method: form.attr('method'),
                            data: form.serialize(),
                            success: function(response) {
                                form.closest('tr').remove();
                                Swal.fire(
                                    'Excluído!',
                                    'O cliente foi excluído com sucesso.',
                                    'success'
                                );
                            },
                            error: function() {
                                Swal.fire(
                                    'Erro!',
                                    'Erro ao excluir o cliente.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            function showAlert(type, message) {
                let alertBox = type === 'success' ? $('#alert-success') : $('#alert-error');
                let alertMessage = type === 'success' ? $('#alert-success-message') : $('#alert-error-message');
                alertMessage.text(message);
                alertBox.removeClass('hidden');
                setTimeout(function() {
                    alertBox.addClass('hidden');
                }, 3000);
            }
        });
    </script>
</body>

</html>