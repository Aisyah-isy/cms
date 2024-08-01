<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah User</div>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/user/simpan') ?>" method="post">
            <div class="form-group">
                <label for="email2">Email Address</label>
                <input type="email" class="form-control" id="email2" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="form-label">Level</label>
                <select name="level" class="form-control">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
        </form>
    </div>
    <div class="card-action">
        <button class="btn btn-success">Submit</button>
        <button class="btn btn-danger">Cancel</button>
    </div>
</div>