<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Csv to Tabular</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>
    <div id="app">
        <input type="file" @change="upload" accept=".csv">
        <table border="2" v-if="rows.length">
            <tr>
                <th v-for="head in header">
                    {{head}}
                </th>
            </tr>
            <tr v-for="row in rows">
                <td v-for="data in row">
                    {{data}}
                </td>
            </tr>

        </table>
    </div>
    <script src="js/app.js"></script>
    
</body>
</html>