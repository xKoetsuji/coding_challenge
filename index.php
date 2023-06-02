<!DOCTYPE HTML>
<html>
    <head>
        <title>MachEight | Coding Challenge</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="wrap-content container mt-4">
            <h2>
                MachEight : Coding Challenge
            </h2>

            <p>
                This app finds pairs of integers from a list that sum to a given value.
            </p>

            <br>
            
            <form role="form" name="pairsfinder" method="POST" action="./findpairnumbers.php">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="numbers">
                                List of Numbers:
                            </label>
                            <input class="form-control" type="text" name="numbers" placeholder="Enter numbers separated by commas" required>
                        </div>

                        <div class="form-group">
                            <label for="targetsum">
                                Target Sum:
                            </label>
                            <input class="form-control" type="number" name="targetsum" step="1" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-o btn-primary">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
