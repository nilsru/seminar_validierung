<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name', 'Laravel App')); ?></title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Schrift -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Style -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Registrierung</h1>

            <!-- Erfolgs Nachricht -->
            <?php if(Session::has('Erfolg')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('Erfolg')); ?>

                </div>
            <?php endif; ?>

            <form action="" method="post" action="<?php echo e(route('register.store')); ?>">
                <!-- csrf Schutz -->
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control <?php echo e($errors->has('name') ? 'error' : ''); ?>" 
                        name="name" id="name" placeholder="Max Mustermann"
                        required autofocus>

                    <!-- Error -->
                    <?php if($errors->has('name')): ?>
                    <div class="error">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="mail">Email-Addresse*</label>
                    <input type="text" class="form-control <?php echo e($errors->has('mail') ? 'error' : ''); ?>" 
                        name="mail" id="mail" placeholder="max@mustermann.com"
                        required>

                    <!-- Error -->
                    <?php if($errors->has('mail')): ?>
                    <div class="error">
                        <?php echo e($errors->first('mail')); ?>

                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="straße">Addresse*</label>
                    <input type="text" class="form-control <?php echo e($errors->has('street') ? 'error' : ''); ?>" 
                        name="straße" id="straße" placeholder="Musterstraße 12"
                        required>

                    <!-- Error -->
                    <?php if($errors->has('straße')): ?>
                    <div class="error">
                        <?php echo e($errors->first('straße')); ?>

                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="plz">Postleitzahl*</label>
                    <input type="text" class="form-control <?php echo e($errors->has('zip') ? 'error' : ''); ?>" 
                        name="plz" id="plz" placeholder="12345"
                        required minlength="5" maxlength="5">

                    <!-- Error -->
                    <?php if($errors->has('plz')): ?>
                    <div class="error">
                        <?php echo e($errors->first('plz')); ?>

                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="stadt">Stadt*</label>
                    <input type="text" class="form-control <?php echo e($errors->has('place') ? 'error' : ''); ?>" 
                        name="stadt" id="stadt" placeholder="Musterstadt"
                        required >

                    <!-- Error -->
                    <?php if($errors->has('stadt')): ?>
                    <div class="error">
                        <?php echo e($errors->first('stadt')); ?>

                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="land">Land*</label>
                    <input type="text" class="form-control <?php echo e($errors->has('land') ? 'error' : ''); ?>" 
                        name="land" id="land" placeholder="Musterland"
                        required>

                    <!-- Error -->
                    <?php if($errors->has('land')): ?>
                    <div class="error">
                        <?php echo e($errors->first('land')); ?>

                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="geburtsdatum">Geburtstag*</label>
                    <input type="date" class="form-control <?php echo e($errors->has('country') ? 'birthdate' : ''); ?>" 
                        name="geburtsdatum" id="geburtsdatum"
                        required>

                    <!-- Error -->
                    <?php if($errors->has('geburtsdatum')): ?>
                    <div class="error">
                        <?php echo e($errors->first('geburtsdatum')); ?>

                    </div>
                    <?php endif; ?>
                </div>

                <p>*benötigt</p>


                <input type="submit" name="send" value="Abschickem" class="btn btn-dark btn-block">


            </form>
        
    
    
    
        </div>


        <!-- Bootstrap JS Import -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\Validierung\resources\views/pages/register.blade.php ENDPATH**/ ?>