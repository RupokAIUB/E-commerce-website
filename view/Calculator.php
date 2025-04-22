<!DOCTYPE html>
<html>
<body>
    <h2>Simple Calculator</h2>
   <input type="number" id="num1" placeholder="Enter the first number.">
   <input typr="number" id="num2" placeholder="Enter the secound number.">
   <select id="operation">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="mod">mod</option>
    <option value="power">power</option>
  </select>

  <button onclick="calculate()">Calculate</button>

  <h3>Result: <span id="result">---</span></h3>

  <script src="../javascript/Calculator.js"></script>


</body>
</html>