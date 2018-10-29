fs.readFile('./book.txt', (err, data) => {
    console.log(data.toString())
})