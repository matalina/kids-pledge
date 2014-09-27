{"filter":false,"title":"AllowanceController.php","tooltip":"/src/Matalina/KidsPledge/Controller/AllowanceController.php","undoManager":{"mark":100,"position":100,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":51},"end":{"row":80,"column":52}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":52},"end":{"row":80,"column":53}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":53},"end":{"row":80,"column":54}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":80,"column":53},"end":{"row":80,"column":54}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":80,"column":52},"end":{"row":80,"column":53}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":80,"column":51},"end":{"row":80,"column":52}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":80,"column":50},"end":{"row":80,"column":51}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":80,"column":49},"end":{"row":80,"column":50}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":80,"column":48},"end":{"row":80,"column":49}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":48},"end":{"row":80,"column":49}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":49},"end":{"row":80,"column":50}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":50},"end":{"row":80,"column":51}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":80,"column":51},"end":{"row":80,"column":52}},"text":"w"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":81,"column":0},"end":{"row":81,"column":3}},"text":"\t\t}"},{"action":"removeLines","range":{"start":{"row":75,"column":0},"end":{"row":81,"column":0}},"nl":"\n","lines":["\t\tif($check) {","\t\t\tSession::flash('success','Allowance updated!');","\t\t\treturn Response::action('AllowanceController@index');","\t\t}","\t\telse {","\t\t\treturn Response::action('AllowanceController@show')->withErrors($this->allowance->getErrors())->withInput();"]},{"action":"removeText","range":{"start":{"row":74,"column":1},"end":{"row":74,"column":45}},"text":"\t$check = $this->allowance->edit((int) $id);"},{"action":"removeText","range":{"start":{"row":74,"column":1},"end":{"row":75,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":86,"column":3},"end":{"row":86,"column":4}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":86,"column":2},"end":{"row":86,"column":3}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":86,"column":2},"end":{"row":86,"column":46}},"text":"\t$check = $this->allowance->edit((int) $id);"},{"action":"insertText","range":{"start":{"row":86,"column":46},"end":{"row":87,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":87,"column":0},"end":{"row":93,"column":0}},"lines":["\t\tif($check) {","\t\t\tSession::flash('success','Allowance updated!');","\t\t\treturn Response::action('AllowanceController@index');","\t\t}","\t\telse {","\t\t\treturn Response::action('AllowanceController@show')->withErrors($this->allowance->getErrors())->withInput();"]},{"action":"insertText","range":{"start":{"row":93,"column":0},"end":{"row":93,"column":3}},"text":"\t\t}"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":86,"column":2},"end":{"row":86,"column":3}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":86,"column":1},"end":{"row":86,"column":2}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":86,"column":1},"end":{"row":86,"column":2}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":92,"column":51},"end":{"row":92,"column":52}},"text":"w"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":92,"column":50},"end":{"row":92,"column":51}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":92,"column":49},"end":{"row":92,"column":50}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":92,"column":48},"end":{"row":92,"column":49}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":92,"column":48},"end":{"row":92,"column":49}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":92,"column":49},"end":{"row":92,"column":50}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":92,"column":50},"end":{"row":92,"column":51}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":92,"column":51},"end":{"row":92,"column":52}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":74,"column":1},"end":{"row":74,"column":51}},"text":"$allowance = $this->allowance->getByID((int) $id);"},{"action":"insertText","range":{"start":{"row":74,"column":51},"end":{"row":75,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":75,"column":0},"end":{"row":76,"column":0}},"lines":["\t\tView::share('allowance',$allowance);"]},{"action":"insertText","range":{"start":{"row":76,"column":0},"end":{"row":76,"column":38}},"text":"\t\treturn View::make('allowance.show');"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":74,"column":1},"end":{"row":74,"column":2}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":76,"column":34},"end":{"row":76,"column":35}},"text":"w"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":76,"column":33},"end":{"row":76,"column":34}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":76,"column":32},"end":{"row":76,"column":33}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":76,"column":31},"end":{"row":76,"column":32}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":76,"column":31},"end":{"row":76,"column":32}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":76,"column":32},"end":{"row":76,"column":33}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":76,"column":33},"end":{"row":76,"column":34}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":76,"column":34},"end":{"row":76,"column":35}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":107,"column":3},"end":{"row":107,"column":4}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":107,"column":2},"end":{"row":107,"column":3}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":2},"end":{"row":107,"column":45}},"text":"$check = $this->allowance->edit((int) $id);"},{"action":"insertText","range":{"start":{"row":107,"column":45},"end":{"row":108,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":108,"column":0},"end":{"row":114,"column":0}},"lines":["\t\tif($check) {","\t\t\tSession::flash('success','Allowance updated!');","\t\t\treturn Response::action('AllowanceController@index');","\t\t}","\t\telse {","\t\t\treturn Response::action('AllowanceController@edit')->withErrors($this->allowance->getErrors())->withInput();"]},{"action":"insertText","range":{"start":{"row":114,"column":0},"end":{"row":114,"column":3}},"text":"\t\t}"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":107,"column":32},"end":{"row":107,"column":33}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":107,"column":31},"end":{"row":107,"column":32}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":107,"column":30},"end":{"row":107,"column":31}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":107,"column":29},"end":{"row":107,"column":30}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":29},"end":{"row":107,"column":30}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":30},"end":{"row":107,"column":31}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":31},"end":{"row":107,"column":32}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":32},"end":{"row":107,"column":33}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":33},"end":{"row":107,"column":34}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":107,"column":34},"end":{"row":107,"column":35}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":45},"end":{"row":109,"column":46}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":44},"end":{"row":109,"column":45}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":43},"end":{"row":109,"column":44}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":42},"end":{"row":109,"column":43}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":41},"end":{"row":109,"column":42}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":40},"end":{"row":109,"column":41}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":109,"column":39},"end":{"row":109,"column":40}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":39},"end":{"row":109,"column":40}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":40},"end":{"row":109,"column":41}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":41},"end":{"row":109,"column":42}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":42},"end":{"row":109,"column":43}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":43},"end":{"row":109,"column":44}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":44},"end":{"row":109,"column":45}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":109,"column":45},"end":{"row":109,"column":46}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":113,"column":51},"end":{"row":113,"column":52}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":113,"column":50},"end":{"row":113,"column":51}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":113,"column":49},"end":{"row":113,"column":50}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":113,"column":48},"end":{"row":113,"column":49}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":113,"column":48},"end":{"row":113,"column":49}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":113,"column":49},"end":{"row":113,"column":50}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":113,"column":50},"end":{"row":113,"column":51}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":113,"column":51},"end":{"row":113,"column":52}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":113,"column":52},"end":{"row":113,"column":53}},"text":"x"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":113,"column":98},"end":{"row":113,"column":111}},"text":"->withInput()"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":18,"column":2},"end":{"row":19,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":19,"column":0},"end":{"row":19,"column":2}},"text":"\t\t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":2},"end":{"row":19,"column":3}},"text":"$"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":3},"end":{"row":19,"column":4}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":4},"end":{"row":19,"column":5}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":5},"end":{"row":19,"column":6}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":6},"end":{"row":19,"column":7}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":7},"end":{"row":19,"column":8}},"text":"-"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":8},"end":{"row":19,"column":9}},"text":">"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":9},"end":{"row":19,"column":10}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":10},"end":{"row":19,"column":11}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":11},"end":{"row":19,"column":12}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":12},"end":{"row":19,"column":13}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":13},"end":{"row":19,"column":14}},"text":"w"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":14},"end":{"row":19,"column":15}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":15},"end":{"row":19,"column":16}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":16},"end":{"row":19,"column":17}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":17},"end":{"row":19,"column":18}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":18},"end":{"row":19,"column":19}},"text":"-"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":19},"end":{"row":19,"column":20}},"text":"g"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":20},"end":{"row":19,"column":21}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":21},"end":{"row":19,"column":22}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":22},"end":{"row":19,"column":23}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":23},"end":{"row":19,"column":24}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":24},"end":{"row":19,"column":25}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":25},"end":{"row":19,"column":27}},"text":"()"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":19,"column":27},"end":{"row":19,"column":28}},"text":";"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":28},"end":{"row":19,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1411679204457,"hash":"997f867432f2e0a333c8ccffea8ca9632fca9edb"}