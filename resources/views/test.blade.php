<div class="container">
    <h1> Hello World  </h1>
    {{$nama}} {{$alamat}}

    {{-- {{dd($data)}}  --}}
    {{-- komentar --}}

    <ul>
        @foreach ($data as $item)
            <li> {{$item}} </li>
        @endforeach
    </ul>

    {{$data[2]}}

    <ul>
        @foreach ($dataInisial as $key => $item)
            <li> {{$key}} : {{$item}} </li>
        @endforeach
    </ul>

    {{$dataInisial["kelas"]}}

    <ul>
        @foreach ($dataObject as $item)
            <li> {{$item}} </li>
        @endforeach
    </ul>

    {{$dataObject->nama}}

    {{-- {{dd($dataArrayObject)}} --}}

    <table border="1">
        <thead>
            <td> # </td>
            <td> nama </td>
            <td> kelas </td>
            <td> alamat </td>
        </thead>
        <tbody>
            @php
                $no = 1 ;
            @endphp
            @foreach ($dataArrayObject as $item)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$item->nama}} </td>
                    <td> {{$item->kelas}} </td>
                    <td> {{$item->alamt}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>