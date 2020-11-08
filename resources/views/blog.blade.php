Hello Wordl Blog {{$id}}

@if ($errors->any())
 <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 </div>
@endif


<h1> POST </h1>
<form action="{{route('blog.post')}}" method="post">
    @csrf
    <input type="text" value="{{old('nama')}}" name="nama" placeholder="nama" >
    @error('nama')
        <div class="alert alert-danger">{{ $errors->first('nama') }}</div>
    @enderror
    <input type="text" value="{{old('kelas')}}" name="kelas" placeholder="kelas" >
    @error('kelas')
        <div class="alert alert-danger">{{ $errors->first('kelas') }}</div>
    @enderror
    <input type="text" value="{{old('alamat')}}" name="alamat" placeholder="alamat" >
    @error('alamat')
        <div class="alert alert-danger">{{ $errors->first('alamat') }}</div>
    @enderror

    <input type="submit">
</form>


{{-- <div class="form-group {{ $errors->has('tingkat') ? 'has-error' : '' }}">
    <label class="control-label" for="">Tingkat Sekolah</label>
    <span class="help-block">{{ $errors->first('tingkat') }}</span>
</div> --}}


<h1> PUT </h1>
<form action="{{route('put.blog.post')}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" value="{{old('nama')}}" name="nama" placeholder="nama" >
    @error('nama')
        <div class="alert alert-danger">{{ $errors->first('nama') }}</div>
    @enderror
    <input type="text" value="{{old('kelas')}}" name="kelas" placeholder="kelas" >
    @error('kelas')
        <div class="alert alert-danger">{{ $errors->first('kelas') }}</div>
    @enderror
    <input type="text" value="{{old('alamat')}}" name="alamat" placeholder="alamat" >
    @error('alamat')
        <div class="alert alert-danger">{{ $errors->first('alamat') }}</div>
    @enderror

    <input type="submit">
</form>