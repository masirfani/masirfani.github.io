const jsonData = {
    sertificate: [
        {
            filename: "[WEB][06][FINAL]WEBSITE DEVELOPMENT FUNDAMENTAL.webp",
        },
        {
            filename: "sololearn-php.webp",
        },
        {
            filename: "[FRONTEND][13][FINAL]FRONTEND - HTML.webp",
        },
        {
            filename: "champion-wdc.webp",
        },
        {
            filename: "competition-edusiber.webp",
        },
        {
            filename: "english-alliance-quiz.webp",
        },
        {
            filename: "sololearn-html.webp",
        },
        {
            filename: "sololearn-javascript.webp",
        },
        {
            filename: "sololearn-jquery.webp",
        },
        {
            filename: "sololearn-sql.webp",
        },
        {
            filename: "indosat.webp",
        },

        // {
        //     filename: "[WEB][06][FINAL]WEBSITE DEVELOPMENT FUNDAMENTAL.webp ",
        // },
        {
            filename: "[CSS][01]INTRODUCTION TO CSS.webp ",
        },
        {
            filename: "[CSS][02]CSS BOX MODEL 1.webp ",
        },
        {
            filename: "[CSS][03]CSS BOX MODEL 2.webp ",
        },
        {
            filename: "[CSS][04]CSS SELECTOR.webp ",
        },
        {
            filename: "[CSS][05]CSS CASCADE.webp ",
        },
        {
            filename: "[CSS][06]CSS SPACING.webp ",
        },
        {
            filename: "[CSS][07]CSS INHERITANCE.webp ",
        },
        {
            filename: "[CSS][08]CSS COLOR.webp ",
        },
        {
            filename: "[CSS][09]CSS PSEUDO ELEMENTS.webp ",
        },
        {
            filename: "[CSS][10]CSS PSEUDO CLASS.webp ",
        },
        {
            filename: "[CSS][11]CSS SIZING UNIT.webp ",
        },
        {
            filename: "[CSS][12]CSS LAYOUT.webp ",
        },
        {
            filename: "[CSS][13]CSS BORDERS.webp ",
        },
        {
            filename: "[CSS][14]CSS SHADOWS.webp ",
        },
        {
            filename: "[CSS][15]CSS FOCUS.webp ",
        },
        {
            filename: "[CSS][16]CSS Z - INDEX.webp ",
        },
        {
            filename: "[CSS][17]CSS FUNCTION.webp ",
        },
        {
            filename: "[CSS][18]CSS GRADIENTS.webp ",
        },
        {
            filename: "[FRONTEND][01]BROWSER, HTTP, DNS, AND HOSTING.webp ",
        },
        {
            filename: "[FRONTEND][02]INTRODUCTION TO HTML.webp ",
        },
        {
            filename: "[FRONTEND][03]ATRIBUTES AND BLOCK ELEMENT.webp ",
        },
        {
            filename: "[FRONTEND][04]HTML IMAGES AND FORMATTED TEXT.webp ",
        },
        {
            filename: "[FRONTEND][05]INLINE ELEMENTS.webp ",
        },
        {
            filename: "[FRONTEND][06]SEMANTIC HTML AND GENERIC ELEMENTS.webp ",
        },
        {
            filename: "[FRONTEND][07]TABLE AND THE IMPLEMENTATION.webp ",
        },
        {
            filename: "[FRONTEND][08]FORMS AND THE IMPLEMENTATION.webp ",
        },
        {
            filename: "[FRONTEND][09]HTML STYLES AND COLORS.webp ",
        },
        {
            filename: "[FRONTEND][10]HTML CLASS AND ID.webp ",
        },
        {
            filename: "[FRONTEND][11]HTML MEDIA.webp ",
        },
        {
            filename: "[FRONTEND][12]PRACTICE MAKING A TO DO LIST WEBSITE.webp ",
        },
        // {
        //     filename: "[FRONTEND][13][FINAL]FRONTEND - HTML.webp ",
        // },
        {
            filename: "[WEB][01]INTERNET INTRODUCTION.webp ",
        },
        {
            filename: "[WEB][02]WEBSITE DEVELOPMENT INTRODUCTION.webp ",
        },
        {
            filename: "[WEB][03]INTEGRATED DEVELOPMENT ENVIRONMENT AND TEXT EDITOR.webp ",
        },
        {
            filename: "[WEB][04]RESPONSIVE WEBSITE DESIGN.webp ",
        },
        {
            filename: "[WEB][05]CAREER IN WEBSITE DEVELOPMENT.webp",
        },
    ],
};

// Step 4: Function to display names
function displayData(data, place, max = 0) {

    let item = "";
    let no = 1;
    data.sertificate.forEach((sertificate) => {
        if (no <= max || max == 0) {
            item += `
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto shadow" style="cursor: context-menu;">
                <img class="img-fluid" src="img/serti/${sertificate.filename}" alt="">
                </div>
            </div>
            `;
        }
        no++;
        console.log(item);
    });

    $(place).html(item);
}
