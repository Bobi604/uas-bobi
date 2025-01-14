<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="cotainer py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    <?php if (isset($error)): ?>
                        <div class="alert allert-danger"><?= $error; ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url('/login/authenticate'); ?>" method="POST">
                        <div class="mv-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" require>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" require>
                        </div>
                        <a href="../users/create">Register</a>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>