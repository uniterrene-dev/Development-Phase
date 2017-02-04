$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    var imageLink;
    var videoLink;
    var allDetailsVideo;
    var allDetails;
    var hoverEditem = 0;
    var hoverEditItemArray = [];
    var reArrangedArray = [];
    var mainItemHovered = 0;
    var needToAppendHere = '';
    var arrayIndexCount = 0;
    var itemDataForResponsive = [];
    var winWidth = $(window).width();
    var maxWidth = 990;
    var removeItem;
    var allInfo = [];
    $('.mainItemLists > li > a').mouseenter(function() {
        mainItemHovered = $(this).text();
    });
    $(window).resize(function(e) {
        console.log('Window Width: ' + $(this).width())
    });

    //===========================================
    // closeing a popup
    //===========================================

    $('.closePop').bind('click', function() {
        $(this).parent().parent().fadeOut();
    });

    $(document).on('click', '.close', function() {
        $(this).parent().parent().remove();
       
    });


    $(document).on('click', '.btn-pointOut', function() {
        $(this).remove();
        var btnTxt = $(this).text();
        $('.appended').each(function(index) {
            var liText = $(this).find('a').text();
            if (btnTxt == liText) {
                $(this).remove();
            }
        });

    });

    $(document).on('click', '.appended a i', function() {
        $(this).parent().parent().remove();

        var deletedText = $(this).parent().text();

        //===========================================
        // for upper section remove
        //===========================================

        $('.btn-pointOut ').each(function(index) {
            var btnTxt = $(this).text();

            if (deletedText == btnTxt) {
                $(this).remove(); // ranit 11-1-17
            }
        });

    });

    $(document).on('click', '.dropped', function() {
        var aD = allDetails;
        var thisIs = $(this).attr('data-id');
        var inputL = $(this).next('.ItemInfoEditable').find('input').length;
        // for(i=0;i<inputL;i++){

        // }
         var ip1 = $(this).next('.ItemInfoEditable').find('input').eq(0).val();
         var ip2 = $(this).next('.ItemInfoEditable').find('input').eq(1).val();
         var ip3 = $(this).next('.ItemInfoEditable').find('input').eq(2).val();
         var ip4 = $(this).next('.ItemInfoEditable').find('input').eq(3).val();
         var ip5 = $(this).next('.ItemInfoEditable').find('input').eq(4).val();
        onDropProcessing(aD, thisIs, ip1, ip2, ip3, ip4, ip5);
    });

    $('.minPanelWrapper li .items .imageArea >img').mousedown(function() {
        var bb = fullData(this);
        var aa = clickedOnDragableItems(this);
        imageLink = aa;
        allDetails = bb;
    });
    //===========================================
    // videos area image link
    //===========================================

    $('.gifHolder  li .gifItems >img').mousedown(function() {
        videoLink = $(this).attr('src');
        console.log(videoLink);
    });

    $('.minPanelWrapper li .items .imageArea >img').mouseup(function() {
        //do nothing
        console.log(allDetails.stepImage);
    });
    //===========================================
    //draggable photos
    //===========================================
    $('.minPanelWrapper li .items .imageArea >img').draggable({
        containment: 'document',
        revert: true,
        helper: "clone",
        scroll: false,
        scrollSensitivity: 100,
        zIndex: 99999,
        start: function(event) {
            // selectedEffect = "explode"
            // $( this ).effect( selectedEffect,  500);
            $('.itemDescription').hide();
            
            var liLength = $(this).parent().next().next('.itemDescription').find('li').length;
          
            for(i=0;i<liLength;i++){
                var txt = $(this).parent().next().next('.itemDescription').find('li').eq(i).html();                
                allInfo.push(txt);              
            }


            var content = imageLink;
            removeItem = $(this).parent().parent().parent().attr('id');
        }
    });
    //===========================================
    // draggable videos
    //===========================================
    $('.videos_area .gifItems >img').draggable({
        containment: 'document',
        revert: true,
        zIndex: 900,
        start: function(event) {
            var content = imageLink;
        }
    });
    //===========================================
    // droppable images
    //===========================================
    $('.placeholderForDrop').droppable({
        drop: function() {
             //$('.minPanelWrapper').css({'overflow-x':'hidden','overflow-y':'auto'});
            var content = imageLink;

            goForDrop(content, removeItem);
            $('li#preDefined').remove();
            var removeIte = removeItem;
            $('.minPanelWrapper li#' + removeIte).hide();

        },
        accept: '.minPanelWrapper li .items .imageArea >img',
        hoverClass: 'hoverOnDrop',
    });
    //===========================================
    // droppable videos
    //===========================================
    $('.videosDropable li').droppable({
        drop: function() {
            var content = videoLink;
            $(this).find('.drop').addClass('dropped');
            $(this).find('.drop').find('p').hide();
            $(this).find('.drop').addClass('hoverOnDrop');
            var imgLink = content.split("/");
            $(this).find('.drop').attr('id', imgLink[1]);
            $(this).find('.drop').css({ 'background': 'url(' + content + ') center center no-repeat', 'background-size': 'cover' });

        },
        accept: '.videos_area .gifItems >img',
        hoverClass: 'hoverOnDrop',
    });


    var l = $('.minPanelWrapper > ul > li').length
    for (i = 0; i < l; i++) {
        var customId = 'dragItem' + i;
        $('.minPanelWrapper > ul > li').eq(i).attr('id', customId);
    }
    //===========================================
    // getting the value on hidden span
    //===========================================
    $('#equip li ul a').mouseenter(function() {
        var parentText = $(this).parent().parent().parent().find('a').eq(0).text();
        parentText = $.trim(parentText);
        console.log("Parent Text Hidden span value : " + parentText);
        $('#hid1').text(parentText);
    });

    $('.mainChild  li a').bind('click', function() {

        checkToResize();
        $('.mainItemLists > li >a').each(function() {
            var currentText = $(this).text();
            if (currentText == mainItemHovered) {
                needToAppendHere = $(this).parent().next();
                console.log('Need to append: ' + needToAppendHere);
            }
        });


        if ($(this).next().hasClass('childs') == true) {
            // //start

            // //===========================================
            // // For those items, they have child/child's
            // //===========================================

            // var detaId = $(this).parent().parent().parent().parent().attr('data-id');
            // $('.mainItemLists li ul').each(function() {
            //     if ($(this).attr('data-id') != undefined) {
            //         reArrangedArray.push($(this).attr('data-id'));
            //     }
            // });
            // console.log("Rearranged Array: " + reArrangedArray);
            // console.log(detaId);
            // $('<button class="btn btn-warning btn-pointOut itsAparent">' + detaId + ' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');

            // //$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ hoverEditem +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
            // $('<button class="btn btn-warning btn-pointOut itsAnotherParent">' + hoverEditem + ' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');

            // if (reArrangedArray.length > 0) {
            //     for (i = 0; i < reArrangedArray.length; i++) {
            //         var last = reArrangedArray[reArrangedArray.length - 1];


            //         if (reArrangedArray[i] == last) {

            //             $('<li class="active appended itsAnotherParent"><a href="javascript:void(0)">' + reArrangedArray[i] + ' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);

            //         } else {
            //             $('<li class="active appended itsAparent"><a href="javascript:void(0)">' + reArrangedArray[i] + ' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
            //         }



            //     }
            // }

            // reArrangedArray = []; //makeing the array blank
            //  if($(this).parent().find('.moreBtn').hasClass('less') == true){              
            //     $(this).next().removeClass('showUl').next().removeClass('less').text('More');               
            //  }

            //  if($(this).parent().siblings().find('.moreBtn').hasClass('less') == true){  
            //     $(this).parent().siblings().find('.childs').removeClass('showUl').next().removeClass('less').text('More');   
            //  }


            // //end

        } else {
            //===========================================
            // For those items, they don't have any child
            //===========================================
            var nV = $.trim($('#hid1').text());
            if (nV) {
                //alert(nV);
                hoverEditem = nV;
            }
            var xxx = $('.mainItemLists li').html();
            $('.mainItemLists li ul').each(function() {
                if ($(this).attr('data-id') != undefined) {
                    reArrangedArray.push($(this).attr('data-id'));
                }
            });
            console.log("Rearranged Array: " + reArrangedArray);
            //===========================================
            // ranit 29-12
            //===========================================
            if ($(this).parent().parent().hasClass('mainChild') == true) {
                console.log('You clicked on a item, that has no child and its an mainchild item');
                reArrangedArray = [];
                hoverEditem = 0;
            }

            var mylist = $(this).parent().parent().parent();
            var text = $(this).text();


            var btnText = $('.forDragAndDropIcon button').each(function(index) {
                var xx = $(this).text();
                var yy = hoverEditem;
                xx = $.trim(xx);
                tex = $.trim(text);
                zz = $.trim(yy);
                if (tex == xx) {
                    $(this).remove(); // ranit 11-1-17
                }
                if (zz == xx) {
                    // $(this).remove();
                }

            });

            var btnText = needToAppendHere.find('li').each(function(index) {
                var xx = $(this).find('a').text();
                var yy = hoverEditem;
                var rr = text;
                ww = $.trim(rr);
                xx = $.trim(xx);
                zz = $.trim(yy);
                if (xx == zz) {
                    //$(this).remove();                     
                }
                if (xx == ww) {
                    $(this).remove(); // ranit 11-1-17
                }

            });

            if (hoverEditem != 0) {
                var btnText = $('.forDragAndDropIcon button').each(function(index) {
                    var xx = hoverEditem;
                    xx = $.trim(xx);
                    tex = $.trim(text);
                    if (tex == xx) {
                        $(this).remove();
                    }
                });
                if (reArrangedArray.length > 0) {
                    for (i = 0; i < reArrangedArray.length; i++) {
                        $('<li class="active appended itsAparent"><a href="javascript:void(0)">' + reArrangedArray[i] + ' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
                    }
                }

                //$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ hoverEditem +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
                $('<button class="btn btn-warning btn-pointOut itsAparent">' + hoverEditem + ' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');
            }

            $('<button class="btn btn-warning btn-pointOut">' + text + ' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');
            $('<li class="active appended itsAnotherParent"><a href="javascript:void(0)">' + text + ' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);

            hoverEditem = 0;
            hoverEditItemArray = [];
            reArrangedArray = [];
            $('.mainItemLists li ul').each(function() {
                $(this).removeAttr('data-id');
            });

            $('.appendPoint:eq(4) li.itsAparent').each(function() { // changed on 11-1-17
                    if ($(this).next().hasClass('itsAparent')) {
                        $(this).remove();
                    }
                    //alert();
                })
                // if($('.appendPoint li').hasClass('itsAparent').next().hasClass('itsAparent')){
                //  alert
                // }

            //===========================================
            // ranit test
            //===========================================

            var btnVal = [];
            var btnText = $('.forDragAndDropIcon button').each(function() {
                btnVal.push($(this).text());
            });
            console.log("Btn Val : " + btnVal);
            var sorted_arr = btnVal.slice().sort();
            var results = [];
            for (var i = 0; i < btnVal.length - 1; i++) {
                if (sorted_arr[i + 1] == sorted_arr[i]) {
                    results.push(sorted_arr[i]);
                }
            }
            console.log("Result length : " + results.length);
            var btnText = $('.forDragAndDropIcon button').each(function() {
                var xxxx = $(this).text();
                if (results[0] == xxxx) {
                    $(this).addClass('delete');
                }
            });
            var xxxxxx = $('.forDragAndDropIcon button.delete').length;
            for (i = 1; i < xxxxxx; i++) {
                $('.forDragAndDropIcon button.delete').eq(i).remove(); // change if needed 11-1-17 ranit
            }



            var btnVal2 = [];
            var btnText = needToAppendHere.find('li').each(function() {
                btnVal2.push($(this).text());
            });
            console.log("Btn val 2 : " + btnVal2);
            var sorted_arr = btnVal2.slice().sort();
            var results = [];
            for (var i = 0; i < btnVal2.length - 1; i++) {
                if (sorted_arr[i + 1] == sorted_arr[i]) {
                    results.push(sorted_arr[i]);
                }
            }
            console.log("btn val 2 length: " + results.length);
            var btnText = needToAppendHere.find('li').each(function() {
                var xxxx = $(this).text();
                if (results[0] == xxxx) {
                    $(this).addClass('delete');
                }
            });
            var xxxxxx = needToAppendHere.find('li.delete').length;
            for (i = 1; i < xxxxxx; i++) {
                needToAppendHere.find('li.delete').eq(i).remove(); // change if needed 11-1-17 ranit
            }
            //===========================================
            // removing the hidden span value
            //===========================================
            $('#hid1').text('');

        }


    });


    //ranit 11-17

    $('#body_parts ul li ul li ul li a').bind('click', function() {
        if ($(this).next().hasClass('childs') == true) {
            //start

            //===========================================
            // For those items, they have child/child's
            //===========================================

            var detaId = $(this).parent().parent().parent().parent().attr('data-id');
            $('.mainItemLists li ul').each(function() {
                if ($(this).attr('data-id') != undefined) {
                    reArrangedArray.push($(this).attr('data-id'));
                }
            });
            console.log("Rearranged Array: " + reArrangedArray);
            console.log(detaId);
            $('<button class="btn btn-warning btn-pointOut itsAparent">' + detaId + ' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');

            //$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ hoverEditem +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
            $('<button class="btn btn-warning btn-pointOut itsAnotherParent">' + hoverEditem + ' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');

            if (reArrangedArray.length > 0) {
                for (i = 0; i < reArrangedArray.length; i++) {
                    var last = reArrangedArray[reArrangedArray.length - 1];


                    if (reArrangedArray[i] == last) {

                        $('<li class="active appended itsAnotherParent"><a href="javascript:void(0)">' + reArrangedArray[i] + ' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);

                    } else {
                        $('<li class="active appended itsAparent"><a href="javascript:void(0)">' + reArrangedArray[i] + ' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
                    }



                }
            }

            reArrangedArray = []; //makeing the array blank
            if ($(this).parent().find('.moreBtn').hasClass('less') == true) {
                $(this).next().removeClass('showUl').next().removeClass('less').text('More');
            }

            if ($(this).parent().siblings().find('.moreBtn').hasClass('less') == true) {
                $(this).parent().siblings().find('.childs').removeClass('showUl').next().removeClass('less').text('More');
            }


            //end
        }

    });








    //===========================================
    // pushing on hover arrays
    //===========================================

    $('.mainItemLists li a').mouseenter(function() {

        if ($(this).next().hasClass('childs') == true) {
            hoverEditem = $(this).text();
            $(this).parent().parent().attr('data-id', hoverEditem);
            hoverEditItemArray.push(hoverEditem);
            arrayIndexCount = arrayIndexCount + 1;
        }

    });

    //===========================================
    //ranit 30-12 and 1-1-17
    //===========================================

    $('#equip li ul a').mouseenter(function() {
        hoverEditItemArray = [];
        var texxx = $('#hid1').text();
        $(this).parent().parent().attr('data-id', texxx);
        console.log("New data id of ul: " + texxx);
        hoverEditItemArray.push(texxx);
        arrayIndexCount = arrayIndexCount + 1;
    });

    $('#equip>ul>li').mouseleave(function() {
        hoverEditItemArray = [];
    });

    $('#equip li ul a').mouseleave(function() {
        $(this).parent().parent().removeAttr('data-id');
    });




    $('.mainItemLists > li > a').mouseenter(function() {
        $(this).find('i').removeClass('fa-plus');
        $(this).find('i').addClass('fa-minus');
    });

    $('.mainItemLists > li li').mouseenter(function() {
        $('.mainItemLists > li > a').find('i').removeClass('fa-plus');
        $('.mainItemLists > li > a').find('i').addClass('fa-minus');
    });

    $('.mainItemLists > li li').mouseleave(function() {
        $('.mainItemLists > li > a').find('i').addClass('fa-plus');
        $('.mainItemLists > li > a').find('i').removeClass('fa-minus');
    });


    $('.mainItemLists > li > a').mouseleave(function() {
        $(this).find('i').addClass('fa-plus');
        $(this).find('i').removeClass('fa-minus');
    });





    $(document).on('click', checkToResize);


    function checkToResize() {

        var totalBtn = $('.forDragAndDropIcon button').length;
        if (totalBtn >= 5) {
            $('.forDragAndDropIcon .curve').css({ 'width': '130px' });
        } else {
            $('.forDragAndDropIcon .curve').css({ 'width': '200px' });
        }

        var mainDropUlLength = $('.mainDropUl li').length;

         var Bl = $('.forDragAndDropIcon button').length
        if(Bl>=1){
            $('.removeAll').show();
        }else{
            $('.removeAll').hide();
        }


    }

    $('.mainChild >li').mouseleave(function() {
        hoverEditItemArray = [];
        reArrangedArray = [];
        $('.mainItemLists li ul').each(function() {
            $(this).removeAttr('data-id');
        });
        console.log('Removeing the reArranged arrya values while leaving main child li' + reArrangedArray) // come back here
    });

    $('.minPanelWrapper >ul >li').mouseenter(function(event) {

       // alert($(this).attr('id'));
       //$(this).append('<a class="btn btn-primary btn-add btn-Plus"><i class="fa fa-plus"></i></a>');

        if (winWidth < 480) {
            //$(this).find('.itemDescription').show();
        } else {
            $(this).find('.itemDescription').show();

        }
    });
    $('.minPanelWrapper >ul >li').mouseleave(function(event) {
        $(this).parent().parent().find('.btn-Plus').remove();
        $(this).find('.itemDescription').hide();
    });
    //$('.itemDescription').mouseenter(function(event) {
    $(this).hide();
    //});
    //===========================================
    // rotate the pop images
    //===========================================

    $('.flipArea li a img').bind('click', function() {
        $('.photosAndVideosArea .imgWrap img').toggleClass('rotated');
    });

    if (winWidth > maxWidth) {
        //===========================================
        // hide on click
        //===========================================

        $('.mainItemLists li a').mouseenter(function() {
            if ($('.mainItemLists ul').hasClass('forceHide')) {
                $('.mainItemLists ul').removeClass('forceHide');
            }
        });



        $('.mainItemLists li a').on('click', function() {
            $('.mainItemLists ul').addClass('forceHide');
        });
    } else {


    }


    //===========================================
    // for popup thumb
    //===========================================

    $(document).on('click','.thumbnailArea li', function() {
        $(this).addClass('activeThumb').siblings('.activeThumb').removeClass('activeThumb');
         var dataValue1 =  $.trim($('.thumbnailArea li.activeThumb a').attr('data-id'));
         dataValue1 = dataValue1.replace(':', '');
         $('.textEdit #editName').val(dataValue1);
         var dataValue2 =  $.trim($('.thumbnailArea li.activeThumb a').attr('data-step'));
         $('.textEdit #inst').val(dataValue2);
         var srcc = $('.activeThumb img').attr('src');
         srcc = srcc.replace('-80X80','');
         $('.photosAndVideosArea #photos .imgWrap .stepImageOnPop').attr('src',srcc);
    });






    //===========================================
    // window width related
    //===========================================
    $(window).resize(function(arguments) { // window resize
        if ($(this).width() < maxWidth) {
            if ($('.itemWrap').find('button').length > 1) {
                //alert();
            } else {
                //$('<button class="btn btn-primary btn-add" >Add</button>').appendTo('.itemWrap.items');
            }
        } else {
            // $('.itemWrap.items button').remove();
        }
    })

    if (winWidth < maxWidth) {
        $('<button class="btn btn-primary btn-add" >Add</button>').appendTo('.itemWrap.items');



        $('.mainItemLists >li >a').on('click', function() {
            //$(this).parent().closest('ul.mainChild').fadeIn();
        })
    }


    $(document).on('click', '.btn-add', function() {

        removeItem = $(this).parent().parent().attr('id');

        $(this).html('<i class="fa fa-check"></i> Added').attr('disabled', true);

        //===========================================
        // getting the item
        //===========================================

        var item = $(this).parent().parent().attr('id');

        //===========================================
        // getting the image link
        //===========================================
        var imgLink = $('.minPanelWrapper ul li#' + item).find('.imageArea img').attr('src');

        //===========================================
        // getting the name of the step
        //===========================================
        var imgStepName = $.trim($('.minPanelWrapper ul li#' + item).find('.ExName h4').text());


        //===========================================
        // getting the language
        //===========================================
        var descriptionLanguage = $('.minPanelWrapper ul li#' + item).find('.ExName .customSelect select').val();


        //===========================================
        // getting the image descrioptions
        //===========================================
        var imgDescription = $.trim($('.minPanelWrapper ul li#' + item).find('.itemDescription p').text());

        itemDataForResponsive = {
            'name': imgStepName,
            'image': imgLink,
            'description': imgDescription,
            'language': descriptionLanguage
        };

        $('.dropped').each(function() {
            if ($(this).attr('id') == itemDataForResponsive.image) {

                //===========================================
                //removeing if duplicate
                //===========================================

                $(this).remove();
            }
        });

        goForDrop(imgLink, removeItem);
        $('#preDefined').remove();

    });

    function appendItems() {
        $('<div class="areaRow appendForMobile clearfix"></div>').appendTo('.photosDropAble');
        $('<ul class="list-inline mobileAppend"></ul>').appendTo('.appendForMobile');
        $('<li class="col-md-4 col-sm-4 col-xs-12"><div class="drop"></div></li>').appendTo('.mobileAppend');
        $('<li class="col-md-4 col-sm-4 col-xs-12"><div class="drop"></div></li>').appendTo('.mobileAppend');
        $('<li class="col-md-4 col-sm-4 col-xs-12"><div class="drop"></div></li>').appendTo('.mobileAppend');
    }

    var infoImg = [];
    var infoText = [];
    // var fullInfo = [{
    //         item : {
    //             itemName : "name1",
    //             itmeImg : "img1"
    //         }
    // }];
    // console.log(fullInfo[0].item);
   
       
    function goForDrop(deta, removeItem) {
        var arrayL = allInfo.length;       
        //alert(removeItem);
        for(i=0;i<arrayL;i++){
            var Hiddenspan = allInfo[i+1];
           // console.log(currentArray);
           $('.Hiddenspan').html(Hiddenspan);
           var Immg = $('.Hiddenspan').find('img').attr('src'); 
           var infoTxt =$.trim($('.Hiddenspan').find('.SlideInfo').text()); 

           infoImg.push(Immg);    
           infoText.push(infoTxt);
           // fullInfo.item[0].ItemImg.push(Immg);
           // fullInfo.item[0].itemText.push(infoTxt);     
        }
         

        console.log(infoImg);
        console.log(infoText);
        var imgLink = deta.split("/");

        var excerName = $('.row.minPanelWrapper ul li#'+removeItem).find('.ExName h4').text();


        var htmls = '<li>' + '<div class="allwrap clearfix">' + '<div class="close" title="Remove">' + '<i class="fa fa-times"></i>' + '</div><div data-id="'+ removeItem +'" id="' + imgLink[1] + '" class="drop dropped" style="background:url(' + deta + ') no-repeat center center; background-size:cover">' + '</div>' + '<div class="ItemInfoEditable" style="white-space: nowrap;">' + '<h4>'+ excerName +'</h4>' + '<input type="text" placeholder="3" name="weekly"> x Weekly ' + '<input type="text"  placeholder="5" name="daily"> x Daily ' + '<input type="text"  placeholder="3" name="rips"> Rips ' + '<br/><input type="text"  placeholder="8" name="sets"> Sets ' + '<input type="text"  placeholder="7" name="hold"> Hold' + '</div>' + '</div>' + '</li>';
        $(htmls).appendTo('.mainDropUl');

    }

    function addTheLi() {
        var htmls = '<li id="preDefined">' + '<div class="allwrap clearfix">' + '<div class="close" title="Remove">' + '<i class="fa fa-times"></i>' + '</div><div class="drop dropped">' + '</div>' + '<div class="ItemInfoEditable">' + '<h4>Exercise Name</h4>' + '<input type="text" placeholder="3" name="weekly"> x Weekly ' + '<input type="text"  placeholder="5" name="daily"> x Daily ' + '<input type="text"  placeholder="3" name="rips"> Rips ' + '<input type="text"  placeholder="8" name="sets"> Sets ' + '<input type="text"  placeholder="7" name="hold"> Hold' + '</div>' + '</div>' + '</li>';
        $(htmls).appendTo('.mainDropUl');
    }

    //===========================================
    // adding the more btn
    //===========================================


    $('#body_parts  li#shoulder ul.childs li').addClass('More');
    $('#body_parts  li#Scapula ul.childs li').addClass('More');
    var mb = 0;

    $('#body_parts  li#shoulder ul.childs li.More').each(function() {
        $(this).find('.moreBtn').remove();
        $(this).append('<button class="moreBtn">More</button>');

    });

    $('#body_parts  li#Scapula ul.childs li.More').each(function() {
        $(this).find('.moreBtn').remove();
        $(this).append('<button class="moreBtn">More</button>');

    });

    $('#thirtParent li ul li ul li button').remove();

    //===========================================
    // click event on more button 
    //===========================================

    $(document).on('click', '.moreBtn', function(e) {
        $(this).parent().css({ 'position': 'relative' });
        $(this).toggleClass('less');
        if ($(this).hasClass('less') == true) {
            $(this).text('Less');
        } else {
            $(this).text('More');
        }

        $(this).prev().toggleClass('showUl');
    });
    $(document).on('click', '.moreBtn', function(e) {
        $(this).parent().siblings().find('.less').removeClass('less').text('More').prev().toggleClass('showUl');
    });



    $('li.items').click(function() {
        var aa = $(window).width();
        var bb = $(document).width();
        //console.log(aa, bb); 
        if (aa < 480) {
            //alert();
            if (bb > aa) {
                $(this).find('.itemDescription').css({ 'left': '-100%', 'right': 'inherit' });
            }
            //$(this).find('.itemDescription').css({'left':'-100%','right':'0'});
        } else if (aa < 991 && aa > 481) {
            // alert();

            if (bb > aa) {
                $(this).find('.itemDescription').css({ 'left': 'inherit', 'right': '50%' });
            }
        }

    });

    //12-17
    $('.mainItemLists>  li >a').bind('click', function() {
        if (winWidth < maxWidth) {
            if ($('.mainItemLists ul').hasClass('forceHide')) {
                $('.mainItemLists ul').removeClass('forceHide');
            }
        }

    });

    $('.mainChild  li a').bind('click', function() {
        if ($(this).next().hasClass('childs') == true) {} else {
            if (winWidth < maxWidth) {
                $('.mainItemLists ul').addClass('forceHide');
                $('.mainItemLists > li > a').find('i').addClass('fa-plus').removeClass('fa-minus');
            }
        }

    });
    $('li#body_parts .childs > li >ul li a').bind('click', function() {
        //alert();
        if ($(this).next().hasClass('childs') == true) {

            if (winWidth < maxWidth) {
                $('.mainItemLists ul').addClass('forceHide');
                $('.mainItemLists > li > a').find('i').addClass('fa-plus').removeClass('fa-minus');
            }
        } else {

        }

    });

    if (winWidth < maxWidth) {

        $('.mainItemLists > li > a').mouseenter(function(event) {
            // e.preventDefault();
        });
        var click = 0;
        $('.mainChild  li  a').bind('click', function() {
            $(this).next().toggleClass('childHide');
        });



        $('.mainItemLists > li > a').bind('click', function() {
            if ($(this).next('ul.mainChild').hasClass('forIcon') == true) {
                //$('.mainItemLists > li > a').find('i').addClass('fa-plus').removeClass('fa-minus');
                $(this).find('i').addClass('fa-plus').removeClass('fa-minus');

            } else {
                $(this).find('i').addClass('fa-minus').removeClass('fa-plus');
            }

        });

    }

    if (winWidth < 480) {
        var ww = $('.minPanelWrapper').width();
        $('.itemDescription').css({ 'width': ww + 'px' });
        $('.minPanelWrapper .items').bind('click', function() {
            $(this).find('.itemDescription').show();
        });
    }

    $('.itemDescription .HeadIng i').bind('click', function() {
        $(this).parent().parent().fadeOut();
    });


});


$('.popup_chng_lang').on('change', function() {
    var popUp_lang = $(this).val();

    if (popUp_lang == 'english') {
        $('.slidearea.showEnglish').show();
        $('.slidearea.showHindi').hide();
        $('.slidearea.showEnglish').val('english');
        $('.slidearea.showHindi .popup_chng_lang').val('');
    } else if (popUp_lang == 'hindi') {
        $('.slidearea.showEnglish').hide();
        $('.slidearea.showHindi').show();
        $('.slidearea.showHindi').val('hindi');
        $('.slidearea.showEnglish .popup_chng_lang').val('');
    }


    $('.thumb_holder_pop li').bind('click', function() {
    $(this).addClass('currnetPopThumb').siblings().removeClass('currnetPopThumb');
});

// $('.itemWrap.items').mouseenter(function(){
//     goForSlide();
// });









}); // document ready ends
//itemSlider(800);
$('.itemWrap.items').hover(itemSlider(800, $('.videoPlaceholder')));



function itemSlider(sildeTime) {
    var sliderTime = sildeTime;
    var sliderHolde = $('.videoPlaceholder');
    sliderHolde.each(function(){
        $(this).find('li').first().addClass('currentSlide');
    });
    

    var aa = sliderHolde.find('li').first().clone();
    sliderHolde.find('ul').prepend('<li>' + aa + '</li>');

    setInterval(function() {

        if (sliderHolde.find('li').last().hasClass('currentSlide') == true) {
             sliderHolde.each(function(){
            $(this).find('li').first().addClass('currentSlide');
            });
        }
        $('.currentSlide').next().addClass('currentSlide').siblings().removeClass('currentSlide');

    }, sliderTime);
}

// function ends
var videoTabClicked = 0;

$('.tabArea li:last-child').bind('click', function(arguments) {
    videoTabClicked = 1;
    $('.thumbsForVideos').show();
    $('.thumbsForImage').hide();
});

$('.tabArea li:first-child').bind('click', function(arguments) {
    videoTabClicked = 0;
    $('.thumbsForVideos').hide();
    $('.thumbsForImage').show();
});

// all info

// var l = allInfo.find('li').length;
// console.log(l);



//+++++++++++++++++++  ajax call to save button +++++++++++++++++++//
$('.textEdit .popupEditAble input').attr('disabled','true');
$('.textEdit textarea').attr('disabled','true');

$('.btn-save-popup').bind('click',function(){
    $(this).text('Saveing..');
    var Name = $('.popDes h2').text();
    var instructions = $('.textEdit #inst').val();
    //var url = 'http://onlinedevserver.biz/html/physiotheray/site/save.php',
   $.post('save.php',{name: Name ,instructions: instructions},function(data, status){
        //alert("Status: " + status);
        $('.btn-save-popup').text('Save');
    });

});

$('#inst').addClass('disply_none');

$("input:radio[name='instructions_checkbox']").on('change',function(){

    $('.mce-content-body ').css({'background':'red'});

var va = $(this).attr('value');
if(va == 'programmer_inst'){
    $('#mceu_11').fadeIn();
    $('#inst').removeClass('disply_none');
    $('.textEdit input').removeAttr('disabled');
}else{
     $('#mceu_11').hide();
     $('#inst').addClass('disply_none');
      // $('.textEdit > input').attr('disabled','true');
}
    
});

$(document).on('click','.popupEditAble .ItemInfoEditable ul li span', function (arguments) {
 $(this).parent() .remove();
});

$('.addNewItem').bind('click',function (arguments) {
    $('<li><input placeholder="1" type="text"> <input placeholder="Name" type="text"> <span><i class="fa fa-times"></i></span></li>').appendTo('.popupEditAble .ItemInfoEditable ul');
});
$('.popupEditAble .ItemInfoEditable ul li:nth-child(2)').append('<br>')


var cl = 0;

$('.editExerciseName').bind('click',function (arguments) {
    $('.editNameOption').slideToggle();
    cl = cl+1;
    $(this).html('<i class="fa fa-check"></i> Finish Editing');
    if(cl>=2){       
        $(this).html('<i class="fa fa-edit"></i> Edit Exercise Name');
        cl = 0; //making the click 0
    }
     
});

$('.addName').bind('click',function(){
    var newNameValue = $(this).prev().val();   
    if(newNameValue != ''){
         $('<li><label><input type="radio" name="ExerciseName" value="'+ newNameValue +'"><span>'+ newNameValue +'</span></label></li>').appendTo('.appendNewName');
         $(this).prev().val('');
    }
});

//For the name change area

$(document).on('change',"input:radio[name='ExerciseName']",function(){

var updatedValue = $(this).val();
$('.popDes h2').text(updatedValue);
    
});

//removeing on click remove all

$('.removeAll').bind('click',function (arguments) {
    $('.forDragAndDropIcon').find('button').remove();
    $('.appendPoint').find('li').remove();
});

$('.mainDropUl').sortable({
    
});

//to get user's ip

    $.getJSON("http://jsonip.com/?callback=?", function (data) {
        console.log(data);
        //alert(data.ip);
        $('<span>Ip: '+ data.ip +'</span>').appendTo('.footer');
    });


    //letest function format with callback syntax
    
    // $.fn.myFunction = function(){
    //     alert('Working');
    // }

    // $(window).on('load', e =>{
    //     $.fn.myFunction();
    // })
//=========================================== // End //===========================================//
