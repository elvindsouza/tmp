function square_cube_table() {
  prompt_input_N = prompt('Enter N:')

  if (prompt_input_N.length == 0) {
    alert('Please enter a number')
    window.location.reload()
    return
  }

  N = parseInt(prompt_input_N)
  console.log(N)
  if (!N) {
    alert('Invalid input. Enter number characters only.')
    window.location.reload()
    return
  }

  table_html =
    '<table border=2 style="font-family:Fira Code;text-align: center;"><tr><th>Number</th><th>Squares</th><th>Cubes</th></tr>'

  for (i = 1; i <= N; i++) {
    table_html =
      table_html + '<tr><td>' + i + '<td>' + i * i + '<td>' + i * i * i
  }
  document.write(table_html)
}
