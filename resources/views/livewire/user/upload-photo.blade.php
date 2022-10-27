<div>
<h1>Atualizar foto perfil</h1>

<form action="#" method="POST" wire:submit.prevent="storagePhoto">
    <input type="file"  wire:model="photo">
    @error('photo') {{$message}} @enderror
    <br>
    <button type="submit">upload photo</button>
</form>
</div>
