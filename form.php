
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Web3</title>
</head>
<body>
    <form method="post">
        <div class="form-group">
            <label for="validationCustom01">Name1</label>
      <input name="name"  type="text" class="form-control" id="validationCustom01" placeholder="Имя" value="Mark" required>
      <div class="valid-feedback">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
        <div class="form-group">
            <label for="inputDate">Date</label>
            <input name="date1"  type="date" class="form-control">
          </div>
          Gender
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" value="Man" type="radio" id="customRadioInline1"  class="custom-control-input" checked>
            <label class="custom-control-label" for="customRadioInline1">Man</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input value="Woman" type="radio" id="customRadioInline2" name="gender" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Woman</label>
          </div>
          How much hand?
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="hand" value="2" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">2</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="hand" value="3" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">3</label>
          </div>
      
        <div class="form-group">
          <label for="exampleFormControlSelect2">SverchSposob</label>
          <select name="select1[]" multiple class="form-control" id="exampleFormControlSelect2">
            <!-- <option value="" selected="selected"></option> -->
            <option value="бессмертие">бессмертие</option>
            <option value="прохождение сквозь стены">прохождение сквозь стены</option>
            <option value="левитация">левитация</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Биография</label>
          <textarea name="biogr" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Опишите" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input name="form-ch" value="1" class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              С контрактом ознакомлен 
            </label>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>


</body>
</html>