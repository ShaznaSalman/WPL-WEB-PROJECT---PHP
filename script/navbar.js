var canvas = document.getElementById('category-canvas');
    var canvasTimeout;

    function showSubcategories(category, button) {
      canvas.style.display = 'block';

      // Set canvas title
      //var canvasTitle = document.getElementById('canvas-title');
      // canvasTitle.textContent = category;

      var buttonRect = button.getBoundingClientRect();
      canvas.style.left = buttonRect.left + 'px';
      canvas.style.top = buttonRect.bottom + 'px';

      var subcategoryList = document.getElementById('subcategory-list');
      subcategoryList.innerHTML = "";

      var subcategories = getSubcategories(category);

      subcategories.forEach(function(subcategory) {
        var link = document.createElement('a');
        link.textContent = subcategory.name;
        link.href = subcategory.link;
        link.className = 'subcategory-link';
        subcategoryList.appendChild(link);

        if (subcategory.subcategories) {
          var subSubcategoryList = document.createElement('ul');
          subSubcategoryList.className = 'sub-subcategory-list';

          subcategory.subcategories.forEach(function(subSubcategory) {
            var subSubcategoryItem = document.createElement('li');
            var subSubcategoryLink = document.createElement('a');
            subSubcategoryLink.textContent = subSubcategory.name;
            subSubcategoryLink.href = subSubcategory.link;
            subSubcategoryLink.className = 'sub-subcategory-link';
            subSubcategoryItem.appendChild(subSubcategoryLink);
            subSubcategoryList.appendChild(subSubcategoryItem);
          });

          subcategoryList.appendChild(subSubcategoryList);
        }
      });
    }

    function getSubcategories(category) {
      if (category === 'BUILDING') {
        return [{
          name: 'BUILDING MATERIALS',
          link: 'building.php#materials',
          subcategories: [{
              name: 'Sand',
              link: 'building.php#sand'
            },
            {
              name: 'Gravel',
              link: 'building.php#gravel'
            },
            {
              name: 'Cement',
              link: 'building.php#cement'
            },
            {
              name: 'Bricks',
              link: 'building.php#bricks'
            },
            {
              name: 'Metal',
              link: 'building.php#metal'
            },

          ]
        }, ];
      } else if (category === 'ELECTRICAL') {
        return [{
            name: 'LIGHTING',
            link: 'electrical.php#light',
            subcategories: [{
                name: 'Orange',
                link: 'electrical.php#orange'
              },
              {
                name: 'Kelani ',
                link: 'electrical.php#kelani'
              },
              {
                name: 'Laxapana ',
                link: 'electrical.php#laxapana'
              },
              {
                name: 'Other ',
                link: 'electrical.php#other1'
              },
            ]
          },
          {
            name: 'HOME APPLIANCES',
            link: 'electrical.php#home',
            subcategories: [{
                name: 'Fans',
                link: 'electrical.php#fan'
              },
              {
                name: 'AC',
                link: 'electrical.php#ac'
              },
              {
                name: 'Other',
                link: 'electrical.php#other2'
              },
            ]
          },
          {
            name: 'ACCESSORIES',
            link: 'electrical.php#accessories',
            subcategories: [{
                name: 'Batteries',
                link: 'electrical.php#battery'
              },
              {
                name: 'Switches and Sockets',
                link: 'electrical.php#switch'
              },
              {
                name: 'Wires and Cables',
                link: 'electrical.php#wire'
              },
              {
                name: 'Other',
                link:'electrical.php#other3'
              },
            ]
          },

        ];
      } else if (category === 'PLUMBING') {
        return [{
            name: 'PLUMBING TOOLS',
            link: 'plumbing.php#tool',
            subcategories: [{
                name: 'Pipes',
                link: 'plumbing.php#pipe'
              },
              {
                name: 'Tanks ',
                link: 'plumbing.php#tank'
              },
              {
                name: 'Hose ',
                link: 'plumbing.php#hose'
              },
              {
                name: 'Pumps ',
                link: 'plumbing.php#pump'
              },

            ]
          },
          {
            name: 'PLUMBING ACCESSORIES',
            link: 'plumbing.php#accessories',
            subcategories: [{
                name: 'Water Taps',
                link: 'plumbing.php#tap'
              },
              {
                name: 'Sinks ',
                link: 'plumbing.php#sink'
              },
            ]
          },
          {
            name: 'BATHWARE',
            link:  'plumbing.php#bath',
            subcategories: [{
                name: 'Bidets',
                link: 'plumbing.php#bidet'
              },
              {
                name: 'Bath and Shower',
                link: 'plumbing.php#shower'
              },
              {
                name: 'Water Heaters',
                link: 'plumbing.php#heater'
              },
              {
                name: 'Other',
                link: 'plumbing.php#other'
              },
            ]
          },

        ];
      } else if (category === 'ROOFING') {
        return [{
            name: 'ROOFING SHEETS',
            link:  'roof.php#sheet',
            subcategories: [{
                name: 'Asbestos Roofing Sheets',
                link: 'roof.php#asbestos',
              },
              {
                name: 'Non Asbestos Roofing Sheets ',
                link: 'roof.php#nonasbestos'
              },
              {
                name: 'Colored sheets ',
                link: 'roof.php#color'
              },
            ]
          },
          {
            name: 'CEILING SHEETS',
            link:  'roof.php#ceiling',
            subcategories: [{
                name: 'Asbestos Ceiling Sheets',
                link: 'roof.php#ceilingC'
              },
              {
                name: 'Non Asbestos Ceiling Sheets ',
                link: 'roof.php#nonceilingC'
              },
            ]
          },
          {
            name: 'ROOFING ACCESSORIES',
            link:  'roof.php#acc',
            subcategories: [{
                name: 'Roofing Paint',
                link: 'roof.php#paint'
              },
              {
                name: 'Foil',
                link: 'roof.php#foil'
              },
              {
                name: 'Gutters',
                link: 'roof.php#gutter'
              },
              {
                name: 'Other',
                link: 'roof.php#other'
              },
            ]
          },

        ];
      } else if (category === 'TOOLS') {
        return [{
            name: 'POWER TOOLS',
            link:  'tools.php#power',
            subcategories: [{
                name: 'Drills',
                link: 'tools.php#drill'
              },
              {
                name: 'Grinders ',
                link: 'tools.php#grinder'
              },
              {
                name: 'Saws ',
                link: 'tools.php#saw'
              },
              {
                name: 'Air Compressors ',
                link: 'tools.php#air'
              },
              {
                name: 'Other ',
                link: 'tools.php#other1'
              },
            ]
          },
          {
            name: 'HAND AND ELECTRICAL TOOLS',
            link:  'tools.php#hand',
            subcategories: [{
                name: 'Hammers and Striking tools',
                link: 'tools.php#hammer'
              },
              {
                name: 'Cutting Tools and Pliers ',
                link: 'tools.php#cut'
              },
              {
                name: 'Screwdrivers and Nutdrivers ',
                link: 'tools.php#screw'
              },
              {
                name: 'Masonry Tools ',
                link: 'tools.php#masonry'
              },
              {
                name: 'Other ',
                link: 'tools.php#other2'
              },

            ]
          },
          {
            name: 'LAYOUT AND MEASURING ACCESSORIES',
            link:  'tools.php#layout',
            subcategories: [{
                name: 'Levels',
                link: 'tools.php#level'
              },
              {
                name: 'Magnets ',
                link: 'tools.php#magnet'
              },
              {
                name: 'Pickup Tools ',
                link: 'tools.php#pickup'
              },
              {
                name: 'Other ',
                link: 'tools.php#other3'
              },
            ]
          },

        ];
      } else if (category === 'PAINTS') {
        return [{
            name: 'PAINT LIST',
            link:  'paints.php#list',
            subcategories: [{
                name: 'Multilac',
                link: 'paints.php#multilac'
              },  
              {
                name: 'Sayerlack',
                link: 'paints.php#sayerlack'
              },
              {
                name: 'Nippolac ',
                link: 'paints.php#nippolac'
              },
              {
                name: 'Causeway ',
                link: 'paints.php#causeway'
              },
              {
                name: 'Other ',
                link: 'paints.php#other2'
              },
            ]
          },
          {
            name: 'PAINT TOOLS',
            link:  'paints.php#tool',
            subcategories: [{
                name: 'Ladders',
                link: 'paints.php#ladder'
              },
              {
                name: 'Brushes and Rollers',
                link:'paints.php#brush'
              },
              {
                name: 'Sandpapers ',
                link: 'paints.php#sandpaper'
              },
              {
                name: 'Other ',
                link: 'paints.php#other3'
              },
            ]
          },
          {
            name: 'PAINT ACCESSORIES',
            link:  'paints.php#accessory',
            subcategories: [{
                name: 'Adhesives and Tapes ',
                link: 'paints.php#tapes'
              },
              {
                name: 'Waterproofing Materials',
                link: 'paints.php#waterproof'
              },
              {
                name: 'Thinner',
                link: 'paints.php#thinner'
              },
              {
                name: 'Other',
                link: 'paints.php#other4'
              },
            ]
          },

        ];
      } else if (category === 'STEEL') {
        return [{
            name: 'BOX BARS ',
            link:  'steel.php#box',
            subcategories: [{
                name: 'Lanwa',
                link:  'steel.php#lanwa'
              },
              {
                name: 'Melwa',
                link:  'steel.php#melwa'
              },
              {
                name: 'Taian ',
                link:  'steel.php#taian'
              },
              {
                name: 'Other ',
                link: 'steel.php#other1'
              },
            ]
          },
          {
            name: 'GI PIPES',
            link:  'steel.php#pipes',
            subcategories: [{
                name: 'Imported Brands',
                link: 'steel.php#import'
              },
              {
                name: 'Local Brands',
                link: 'steel.php#local'
              },

            ]
          },
          {
            name: 'GI ACCESSORIES',
            link:  'steel.php#accessories',
            subcategories: [{
                name: 'QT Bars',
                link: 'steel.php#qt'
              },
              {
                name: 'MSI Plates',
                link: 'steel.php#msi'
              },
              {
                name: 'GI Cups',
                link: 'steel.php#cup'
              },
              {
                name: 'Other',
                link: 'steel.php#other2'
              },
            ]
          },

        ];
      } else if (category === 'HOME') {
        return [{
            name: 'CLEANING ',
            link:  'kitchen.php#cleaning',
            subcategories: [{
                name: 'Kitchen and Oven Cleaner',
                link: 'kitchen.php#cleaner'
              },
              {
                name: 'Bathroom Cleaner',
                link: 'kitchen.php#bathroom'
              },
              {
                name: 'Floor cleaner and Wipes ',
                link: 'kitchen.php#floor'
              },
              {
                name: 'Other ',
                link: 'kitchen.php#other1'
              },
            ]
          },
          {
            name: 'KITCHENWARE',
            link:  'kitchen.php#kitch',
            subcategories: [{
                name: 'Kitchen sinks and Taps',
                link: 'kitchen.php#kTap'
              },
              {
                name: 'Kitchen Items',
                link: 'kitchen.php#kItem'
              },
            ]
          },
          {
            name: 'HOUSEHOLD ITEMS',
            link: 'kitchen.php#house',
            subcategories: [{
                name: 'Racks',
                link:'kitchen.php#rack'
              },
              {
                name: 'Wipers',
                link: 'kitchen.php#wiper'
              },
              {
                name: 'Brooms',
                link: 'kitchen.php#broom'
              },
              {
                name: 'Other',
                link: 'kitchen.php#other2'
              },
            ]
          },
          {
            name: 'PEST CONTROL',
            link:  'kitchen.php#pest',
            subcategories: [{
                name: 'Weed Control',
                link: 'kitchen.php#weed'
              },
              {
                name: 'Pest Control',
                link: 'kitchen.php#pestC'
              },
            ]
          },

        ];
      } else if (category === 'GENERAL') {
        return [{
          name: 'ACCESSORIES ',
          link:  'general.php#accessories',
          subcategories: [{
              name: 'Doors and Window',
              link: 'general.php#door'
            },
            {
              name: 'Floors and Walls',
              link: 'general.php#floor'
            },
            {
              name: 'Home Security',
              link: 'general.php#home'
            },
            {
              name: 'Brass Items',
              link: 'general.php#brass'
            },
            {
              name: 'Chains,Cables,Ropes',
              link: 'general.php#chain'
            },
            {
              name: 'Padlocks',
              link: 'general.php#padlock'
            },
            {
              name: 'Other',
              link: 'general.php#other'
            },
          ]
        }, ];
      } else if (category === 'INDUSTRIAL') {
        return [{
          name: 'ROAD CONSTRUCTION',
          link:  'industrial.php#road',
          subcategories: [{
              name: 'Flashing Tapes ',
              link: 'industrial.php#flash'
            },
            {
              name: 'Bitumen',
              link: 'industrial.php#bitmen'
            },
            {
              name: 'Other',
              link: 'industrial.php#other'
            },
          ]
        }, ];
      } else if (category === 'TILES') {
        return [{
          name: 'TILES',
          link:  'tiles.php#tile',
          subcategories: [{
              name: 'Design tiles ',
              link: 'tiles.php#design'
            },
            {
              name: 'Tile Grout',
              link: 'tiles.php#grout'
            },
            {
              name: 'Other',
              link: 'tiles.php#other'
            },
          ]
        }, ];
      } else if (category === 'category3') {
        return [{
            name: 'Subcategory 3-1',
            link: 'subcat3-1.html'
          },
          {
            name: 'Subcategory 3-2',
            link: 'subcat3-2.html'
          }
        ];
      }
      return [];
    }


    function hideCanvas() {
      canvasTimeout = setTimeout(function() {
        canvas.style.display = 'none';
      }, 200);
    }

    canvas.onmouseover = function() {
      clearTimeout(canvasTimeout);
    };

    canvas.onmouseout = function() {
      canvasTimeout = setTimeout(hideCanvas, 200);
    };