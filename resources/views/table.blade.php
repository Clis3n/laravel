@extends('layout.template')

@section('content')
    <div class="container py-5">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center" style="width: 50px;">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">NIM</th>
                    <th scope="col" class="text-center">Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center align-middle">1</td>
                    <td class="align-middle">Frendy</td>
                    <td class="text-center align-middle">523180</td>
                    <td class="text-center align-middle">A</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">2</td>
                    <td class="align-middle">Ammar</td>
                    <td class="text-center align-middle">518147</td>
                    <td class="text-center align-middle">A</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">3</td>
                    <td class="align-middle">Aditya</td>
                    <td class="text-center align-middle">523550</td>
                    <td class="text-center align-middle">B</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">4</td>
                    <td class="align-middle">Ridho</td>
                    <td class="text-center align-middle">524130</td>
                    <td class="text-center align-middle">B</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">5</td>
                    <td class="align-middle">Raihan</td>
                    <td class="text-center align-middle">524257</td>
                    <td class="text-center align-middle">A</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

