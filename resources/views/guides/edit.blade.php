<div class="edit-form">
    <h3>Edit User</h3>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" value="{{ $user->prenom }}">
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ $user->username }}">
        </div>

        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="isAdmin">Is Admin:</label>
            <input type="checkbox" id="isAdmin" name="isAdmin" value="1" {{ $user->isAdmin ? 'checked' : '' }}>
        </div>

        <div class="form-group">
            <label for="guide_id">Guide ID:</label>
            <input type="text" id="guide_id" name="guide_id" value="{{ $user->guide_id }}">
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
