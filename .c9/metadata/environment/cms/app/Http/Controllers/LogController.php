{"filter":false,"title":"LogController.php","tooltip":"/cms/app/Http/Controllers/LogController.php","undoManager":{"mark":92,"position":92,"stack":[[{"start":{"row":67,"column":3},"end":{"row":67,"column":4},"action":"insert","lines":[" "],"id":1}],[{"start":{"row":67,"column":4},"end":{"row":68,"column":0},"action":"insert","lines":["        return view('Logsedit', ['Log' => $Log]);",""],"id":2}],[{"start":{"row":67,"column":8},"end":{"row":67,"column":12},"action":"remove","lines":["    "],"id":3}],[{"start":{"row":67,"column":29},"end":{"row":67,"column":30},"action":"remove","lines":["'"],"id":4},{"start":{"row":67,"column":28},"end":{"row":67,"column":29},"action":"remove","lines":["t"]},{"start":{"row":67,"column":27},"end":{"row":67,"column":28},"action":"remove","lines":["i"]},{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"remove","lines":["d"]},{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"remove","lines":["e"]},{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"remove","lines":["s"]}],[{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"insert","lines":["d"],"id":5},{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"insert","lines":["e"]},{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"insert","lines":["t"]},{"start":{"row":67,"column":27},"end":{"row":67,"column":28},"action":"insert","lines":["a"]},{"start":{"row":67,"column":28},"end":{"row":67,"column":29},"action":"insert","lines":["i"]}],[{"start":{"row":67,"column":29},"end":{"row":67,"column":30},"action":"insert","lines":["l"],"id":6}],[{"start":{"row":67,"column":30},"end":{"row":67,"column":31},"action":"insert","lines":["'"],"id":7}],[{"start":{"row":66,"column":5},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":67,"column":0},"end":{"row":67,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":67,"column":8},"end":{"row":73,"column":9},"action":"insert","lines":["$file = $request->file('image');//fileの取得","        if(!empty($file)){","            $filename = $file->getClientOriginalName();","            $move = $file->move('./upload/',$filename);","        }else{","            $filename = \"\";","        }"],"id":9}],[{"start":{"row":70,"column":11},"end":{"row":70,"column":55},"action":"remove","lines":[" $move = $file->move('./upload/',$filename);"],"id":10},{"start":{"row":70,"column":10},"end":{"row":70,"column":11},"action":"remove","lines":[" "]},{"start":{"row":70,"column":9},"end":{"row":70,"column":10},"action":"remove","lines":[" "]},{"start":{"row":70,"column":8},"end":{"row":70,"column":9},"action":"remove","lines":[" "]},{"start":{"row":70,"column":4},"end":{"row":70,"column":8},"action":"remove","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"remove","lines":["    "]},{"start":{"row":69,"column":55},"end":{"row":70,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":84,"column":5},"end":{"row":85,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":85,"column":0},"end":{"row":85,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":85,"column":8},"end":{"row":91,"column":9},"action":"insert","lines":["$file = $request->file('image');//fileの取得","        if(!empty($file)){","            $filename = $file->getClientOriginalName();","            $move = $file->move('./upload/',$filename);","        }else{","            $filename = \"\";","        }"],"id":12}],[{"start":{"row":88,"column":11},"end":{"row":88,"column":55},"action":"remove","lines":[" $move = $file->move('./upload/',$filename);"],"id":13},{"start":{"row":88,"column":10},"end":{"row":88,"column":11},"action":"remove","lines":[" "]},{"start":{"row":88,"column":9},"end":{"row":88,"column":10},"action":"remove","lines":[" "]},{"start":{"row":88,"column":8},"end":{"row":88,"column":9},"action":"remove","lines":[" "]},{"start":{"row":88,"column":4},"end":{"row":88,"column":8},"action":"remove","lines":["    "]},{"start":{"row":88,"column":0},"end":{"row":88,"column":4},"action":"remove","lines":["    "]},{"start":{"row":87,"column":55},"end":{"row":88,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":85,"column":23},"end":{"row":85,"column":24},"action":"remove","lines":["t"],"id":14},{"start":{"row":85,"column":22},"end":{"row":85,"column":23},"action":"remove","lines":["s"]},{"start":{"row":85,"column":21},"end":{"row":85,"column":22},"action":"remove","lines":["e"]},{"start":{"row":85,"column":20},"end":{"row":85,"column":21},"action":"remove","lines":["u"]},{"start":{"row":85,"column":19},"end":{"row":85,"column":20},"action":"remove","lines":["q"]},{"start":{"row":85,"column":18},"end":{"row":85,"column":19},"action":"remove","lines":["e"]},{"start":{"row":85,"column":17},"end":{"row":85,"column":18},"action":"remove","lines":["r"]}],[{"start":{"row":85,"column":17},"end":{"row":85,"column":18},"action":"insert","lines":["L"],"id":15},{"start":{"row":85,"column":18},"end":{"row":85,"column":19},"action":"insert","lines":["o"]},{"start":{"row":85,"column":19},"end":{"row":85,"column":20},"action":"insert","lines":["f"]}],[{"start":{"row":85,"column":19},"end":{"row":85,"column":20},"action":"remove","lines":["f"],"id":16}],[{"start":{"row":85,"column":19},"end":{"row":85,"column":20},"action":"insert","lines":["g"],"id":17}],[{"start":{"row":67,"column":23},"end":{"row":67,"column":24},"action":"remove","lines":["t"],"id":18},{"start":{"row":67,"column":22},"end":{"row":67,"column":23},"action":"remove","lines":["s"]},{"start":{"row":67,"column":21},"end":{"row":67,"column":22},"action":"remove","lines":["e"]},{"start":{"row":67,"column":20},"end":{"row":67,"column":21},"action":"remove","lines":["u"]},{"start":{"row":67,"column":19},"end":{"row":67,"column":20},"action":"remove","lines":["q"]},{"start":{"row":67,"column":18},"end":{"row":67,"column":19},"action":"remove","lines":["e"]},{"start":{"row":67,"column":17},"end":{"row":67,"column":18},"action":"remove","lines":["r"]}],[{"start":{"row":67,"column":17},"end":{"row":67,"column":18},"action":"insert","lines":["L"],"id":19},{"start":{"row":67,"column":18},"end":{"row":67,"column":19},"action":"insert","lines":["o"]},{"start":{"row":67,"column":19},"end":{"row":67,"column":20},"action":"insert","lines":["g"]}],[{"start":{"row":67,"column":8},"end":{"row":72,"column":9},"action":"remove","lines":["$file = $Log->file('image');//fileの取得","        if(!empty($file)){","            $filename = $file->getClientOriginalName();","        }else{","            $filename = \"\";","        }"],"id":20},{"start":{"row":67,"column":4},"end":{"row":67,"column":8},"action":"remove","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"remove","lines":["    "]},{"start":{"row":66,"column":5},"end":{"row":67,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":67,"column":50},"end":{"row":68,"column":0},"action":"remove","lines":["",""],"id":21}],[{"start":{"row":78,"column":7},"end":{"row":83,"column":9},"action":"remove","lines":[" $file = $Log->file('image');//fileの取得","        if(!empty($file)){","            $filename = $file->getClientOriginalName();","        }else{","            $filename = \"\";","        }"],"id":22},{"start":{"row":78,"column":6},"end":{"row":78,"column":7},"action":"remove","lines":[" "]},{"start":{"row":78,"column":5},"end":{"row":78,"column":6},"action":"remove","lines":[" "]},{"start":{"row":78,"column":4},"end":{"row":78,"column":5},"action":"remove","lines":[" "]},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"remove","lines":["    "]},{"start":{"row":77,"column":5},"end":{"row":78,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":20},"action":"insert","lines":["use Auth; // 冒頭付近に追加"],"id":23}],[{"start":{"row":46,"column":23},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":47,"column":0},"end":{"row":47,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":47,"column":8},"end":{"row":47,"column":49},"action":"insert","lines":["$book->user_id    =  Auth::id(); // ここを追加"],"id":25}],[{"start":{"row":47,"column":12},"end":{"row":47,"column":13},"action":"remove","lines":["k"],"id":26},{"start":{"row":47,"column":11},"end":{"row":47,"column":12},"action":"remove","lines":["o"]},{"start":{"row":47,"column":10},"end":{"row":47,"column":11},"action":"remove","lines":["o"]},{"start":{"row":47,"column":9},"end":{"row":47,"column":10},"action":"remove","lines":["b"]}],[{"start":{"row":47,"column":9},"end":{"row":47,"column":10},"action":"insert","lines":["L"],"id":27},{"start":{"row":47,"column":10},"end":{"row":47,"column":11},"action":"insert","lines":["o"]},{"start":{"row":47,"column":11},"end":{"row":47,"column":12},"action":"insert","lines":["g"]}],[{"start":{"row":79,"column":49},"end":{"row":80,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":80,"column":0},"end":{"row":80,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":80,"column":4},"end":{"row":80,"column":8},"action":"remove","lines":["    "],"id":29},{"start":{"row":80,"column":0},"end":{"row":80,"column":4},"action":"remove","lines":["    "]},{"start":{"row":79,"column":49},"end":{"row":80,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":78,"column":5},"end":{"row":79,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":79,"column":0},"end":{"row":79,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":79,"column":8},"end":{"row":79,"column":42},"action":"insert","lines":["if($book->user_id === Auth::id()){"],"id":31}],[{"start":{"row":80,"column":49},"end":{"row":81,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":81,"column":0},"end":{"row":81,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":81,"column":8},"end":{"row":83,"column":5},"action":"insert","lines":["} else {","        return \"アクセス権がありません\";","    }"],"id":33}],[{"start":{"row":80,"column":0},"end":{"row":80,"column":4},"action":"insert","lines":["    "],"id":34}],[{"start":{"row":82,"column":0},"end":{"row":82,"column":4},"action":"insert","lines":["    "],"id":35},{"start":{"row":83,"column":0},"end":{"row":83,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":79,"column":15},"end":{"row":79,"column":16},"action":"remove","lines":["k"],"id":36},{"start":{"row":79,"column":14},"end":{"row":79,"column":15},"action":"remove","lines":["o"]},{"start":{"row":79,"column":13},"end":{"row":79,"column":14},"action":"remove","lines":["o"]},{"start":{"row":79,"column":12},"end":{"row":79,"column":13},"action":"remove","lines":["b"]}],[{"start":{"row":79,"column":12},"end":{"row":79,"column":13},"action":"insert","lines":["L"],"id":37},{"start":{"row":79,"column":13},"end":{"row":79,"column":14},"action":"insert","lines":["o"]},{"start":{"row":79,"column":14},"end":{"row":79,"column":15},"action":"insert","lines":["g"]}],[{"start":{"row":96,"column":24},"end":{"row":96,"column":25},"action":"remove","lines":["d"],"id":38},{"start":{"row":96,"column":23},"end":{"row":96,"column":24},"action":"remove","lines":["n"]},{"start":{"row":96,"column":22},"end":{"row":96,"column":23},"action":"remove","lines":["i"]},{"start":{"row":96,"column":21},"end":{"row":96,"column":22},"action":"remove","lines":["f"]}],[{"start":{"row":96,"column":21},"end":{"row":96,"column":22},"action":"insert","lines":["w"],"id":39},{"start":{"row":96,"column":22},"end":{"row":96,"column":23},"action":"insert","lines":["h"]},{"start":{"row":96,"column":23},"end":{"row":96,"column":24},"action":"insert","lines":["r"]},{"start":{"row":96,"column":24},"end":{"row":96,"column":25},"action":"insert","lines":["e"]},{"start":{"row":96,"column":25},"end":{"row":96,"column":26},"action":"insert","lines":["r"]}],[{"start":{"row":96,"column":25},"end":{"row":96,"column":26},"action":"remove","lines":["r"],"id":40},{"start":{"row":96,"column":24},"end":{"row":96,"column":25},"action":"remove","lines":["e"]},{"start":{"row":96,"column":23},"end":{"row":96,"column":24},"action":"remove","lines":["r"]}],[{"start":{"row":96,"column":23},"end":{"row":96,"column":24},"action":"insert","lines":["e"],"id":41},{"start":{"row":96,"column":24},"end":{"row":96,"column":25},"action":"insert","lines":["r"]},{"start":{"row":96,"column":25},"end":{"row":96,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":96,"column":27},"end":{"row":96,"column":28},"action":"insert","lines":["'"],"id":44},{"start":{"row":96,"column":28},"end":{"row":96,"column":29},"action":"insert","lines":["'"]}],[{"start":{"row":96,"column":28},"end":{"row":96,"column":29},"action":"insert","lines":["u"],"id":45},{"start":{"row":96,"column":29},"end":{"row":96,"column":30},"action":"insert","lines":["s"]},{"start":{"row":96,"column":30},"end":{"row":96,"column":31},"action":"insert","lines":["e"]},{"start":{"row":96,"column":31},"end":{"row":96,"column":32},"action":"insert","lines":["r"]}],[{"start":{"row":96,"column":32},"end":{"row":96,"column":33},"action":"insert","lines":["_"],"id":46},{"start":{"row":96,"column":33},"end":{"row":96,"column":34},"action":"insert","lines":["i"]},{"start":{"row":96,"column":34},"end":{"row":96,"column":35},"action":"insert","lines":["d"]}],[{"start":{"row":96,"column":36},"end":{"row":96,"column":37},"action":"insert","lines":[","],"id":47}],[{"start":{"row":96,"column":37},"end":{"row":96,"column":38},"action":"insert","lines":["A"],"id":48},{"start":{"row":96,"column":38},"end":{"row":96,"column":39},"action":"insert","lines":["u"]},{"start":{"row":96,"column":39},"end":{"row":96,"column":40},"action":"insert","lines":["t"]},{"start":{"row":96,"column":40},"end":{"row":96,"column":41},"action":"insert","lines":["h"]}],[{"start":{"row":96,"column":41},"end":{"row":96,"column":42},"action":"insert","lines":[":"],"id":49},{"start":{"row":96,"column":42},"end":{"row":96,"column":43},"action":"insert","lines":[":"]},{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"insert","lines":["u"]},{"start":{"row":96,"column":44},"end":{"row":96,"column":45},"action":"insert","lines":["d"]}],[{"start":{"row":96,"column":45},"end":{"row":96,"column":46},"action":"insert","lines":["("],"id":50},{"start":{"row":96,"column":46},"end":{"row":96,"column":47},"action":"insert","lines":[")"]}],[{"start":{"row":96,"column":46},"end":{"row":96,"column":47},"action":"remove","lines":[")"],"id":51},{"start":{"row":96,"column":45},"end":{"row":96,"column":46},"action":"remove","lines":["("]},{"start":{"row":96,"column":44},"end":{"row":96,"column":45},"action":"remove","lines":["d"]},{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"remove","lines":["u"]}],[{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"insert","lines":["i"],"id":52},{"start":{"row":96,"column":44},"end":{"row":96,"column":45},"action":"insert","lines":["d"]},{"start":{"row":96,"column":45},"end":{"row":96,"column":46},"action":"insert","lines":["("]},{"start":{"row":96,"column":46},"end":{"row":96,"column":47},"action":"insert","lines":[")"]},{"start":{"row":96,"column":47},"end":{"row":96,"column":48},"action":"insert","lines":[")"]}],[{"start":{"row":96,"column":48},"end":{"row":96,"column":49},"action":"insert","lines":["-"],"id":53},{"start":{"row":96,"column":49},"end":{"row":96,"column":50},"action":"insert","lines":[">"]}],[{"start":{"row":96,"column":50},"end":{"row":96,"column":51},"action":"insert","lines":["f"],"id":54},{"start":{"row":96,"column":51},"end":{"row":96,"column":52},"action":"insert","lines":["i"]},{"start":{"row":96,"column":52},"end":{"row":96,"column":53},"action":"insert","lines":["n"]},{"start":{"row":96,"column":53},"end":{"row":96,"column":54},"action":"insert","lines":["d"]}],[{"start":{"row":96,"column":54},"end":{"row":96,"column":55},"action":"insert","lines":["("],"id":55},{"start":{"row":96,"column":55},"end":{"row":96,"column":56},"action":"insert","lines":[")"]}],[{"start":{"row":96,"column":55},"end":{"row":96,"column":56},"action":"remove","lines":[")"],"id":56}],[{"start":{"row":67,"column":5},"end":{"row":68,"column":0},"action":"insert","lines":["",""],"id":57},{"start":{"row":68,"column":0},"end":{"row":68,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":68,"column":8},"end":{"row":68,"column":46},"action":"insert","lines":[" $Logs = User::find(Auth::id())->Logs;"],"id":58}],[{"start":{"row":68,"column":8},"end":{"row":68,"column":9},"action":"remove","lines":[" "],"id":59}],[{"start":{"row":69,"column":38},"end":{"row":69,"column":39},"action":"insert","lines":["s"],"id":60}],[{"start":{"row":69,"column":48},"end":{"row":69,"column":49},"action":"insert","lines":["s"],"id":61}],[{"start":{"row":6,"column":20},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":62}],[{"start":{"row":69,"column":8},"end":{"row":69,"column":45},"action":"remove","lines":["$Logs = User::find(Auth::id())->Logs;"],"id":64},{"start":{"row":69,"column":4},"end":{"row":69,"column":8},"action":"remove","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":68,"column":5},"end":{"row":69,"column":0},"action":"remove","lines":["",""],"id":65}],[{"start":{"row":69,"column":38},"end":{"row":69,"column":39},"action":"remove","lines":["s"],"id":66}],[{"start":{"row":69,"column":47},"end":{"row":69,"column":48},"action":"remove","lines":["s"],"id":67}],[{"start":{"row":68,"column":5},"end":{"row":69,"column":0},"action":"insert","lines":["",""],"id":86},{"start":{"row":69,"column":0},"end":{"row":69,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":69,"column":8},"end":{"row":70,"column":0},"action":"insert","lines":["        $profiles = User::find(Auth::id())->profiles;",""],"id":87}],[{"start":{"row":69,"column":14},"end":{"row":69,"column":15},"action":"remove","lines":[" "],"id":88},{"start":{"row":69,"column":13},"end":{"row":69,"column":14},"action":"remove","lines":[" "]},{"start":{"row":69,"column":12},"end":{"row":69,"column":13},"action":"remove","lines":[" "]},{"start":{"row":69,"column":8},"end":{"row":69,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":69,"column":54},"end":{"row":70,"column":0},"action":"remove","lines":["",""],"id":89}],[{"start":{"row":69,"column":8},"end":{"row":69,"column":9},"action":"remove","lines":[" "],"id":90}],[{"start":{"row":69,"column":15},"end":{"row":69,"column":16},"action":"remove","lines":["e"],"id":91},{"start":{"row":69,"column":14},"end":{"row":69,"column":15},"action":"remove","lines":["l"]},{"start":{"row":69,"column":13},"end":{"row":69,"column":14},"action":"remove","lines":["i"]},{"start":{"row":69,"column":12},"end":{"row":69,"column":13},"action":"remove","lines":["f"]},{"start":{"row":69,"column":11},"end":{"row":69,"column":12},"action":"remove","lines":["o"]},{"start":{"row":69,"column":10},"end":{"row":69,"column":11},"action":"remove","lines":["r"]},{"start":{"row":69,"column":9},"end":{"row":69,"column":10},"action":"remove","lines":["p"]}],[{"start":{"row":69,"column":9},"end":{"row":69,"column":10},"action":"insert","lines":["c"],"id":92},{"start":{"row":69,"column":10},"end":{"row":69,"column":11},"action":"insert","lines":["o"]},{"start":{"row":69,"column":11},"end":{"row":69,"column":12},"action":"insert","lines":["m"]},{"start":{"row":69,"column":12},"end":{"row":69,"column":13},"action":"insert","lines":["e"]},{"start":{"row":69,"column":13},"end":{"row":69,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":69,"column":13},"end":{"row":69,"column":14},"action":"remove","lines":["n"],"id":93},{"start":{"row":69,"column":12},"end":{"row":69,"column":13},"action":"remove","lines":["e"]}],[{"start":{"row":69,"column":12},"end":{"row":69,"column":13},"action":"insert","lines":["m"],"id":94},{"start":{"row":69,"column":13},"end":{"row":69,"column":14},"action":"insert","lines":["e"]},{"start":{"row":69,"column":14},"end":{"row":69,"column":15},"action":"insert","lines":["n"]},{"start":{"row":69,"column":15},"end":{"row":69,"column":16},"action":"insert","lines":["t"]}],[{"start":{"row":69,"column":23},"end":{"row":69,"column":24},"action":"remove","lines":["r"],"id":95},{"start":{"row":69,"column":22},"end":{"row":69,"column":23},"action":"remove","lines":["e"]},{"start":{"row":69,"column":21},"end":{"row":69,"column":22},"action":"remove","lines":["s"]},{"start":{"row":69,"column":20},"end":{"row":69,"column":21},"action":"remove","lines":["U"]}],[{"start":{"row":69,"column":20},"end":{"row":69,"column":21},"action":"insert","lines":["L"],"id":96},{"start":{"row":69,"column":21},"end":{"row":69,"column":22},"action":"insert","lines":["o"]},{"start":{"row":69,"column":22},"end":{"row":69,"column":23},"action":"insert","lines":["g"]}],[{"start":{"row":69,"column":43},"end":{"row":69,"column":50},"action":"remove","lines":["profile"],"id":97},{"start":{"row":69,"column":43},"end":{"row":69,"column":44},"action":"insert","lines":["c"]},{"start":{"row":69,"column":44},"end":{"row":69,"column":45},"action":"insert","lines":["o"]},{"start":{"row":69,"column":45},"end":{"row":69,"column":46},"action":"insert","lines":["m"]},{"start":{"row":69,"column":46},"end":{"row":69,"column":47},"action":"insert","lines":["m"]},{"start":{"row":69,"column":47},"end":{"row":69,"column":48},"action":"insert","lines":["e"]},{"start":{"row":69,"column":48},"end":{"row":69,"column":49},"action":"insert","lines":["n"]},{"start":{"row":69,"column":49},"end":{"row":69,"column":50},"action":"insert","lines":["t"]}],[{"start":{"row":69,"column":43},"end":{"row":69,"column":50},"action":"remove","lines":["comment"],"id":98},{"start":{"row":69,"column":43},"end":{"row":69,"column":50},"action":"insert","lines":["comment"]}],[{"start":{"row":69,"column":35},"end":{"row":69,"column":36},"action":"remove","lines":[":"],"id":99},{"start":{"row":69,"column":34},"end":{"row":69,"column":35},"action":"remove","lines":[":"]},{"start":{"row":69,"column":33},"end":{"row":69,"column":34},"action":"remove","lines":["h"]},{"start":{"row":69,"column":32},"end":{"row":69,"column":33},"action":"remove","lines":["t"]},{"start":{"row":69,"column":31},"end":{"row":69,"column":32},"action":"remove","lines":["u"]},{"start":{"row":69,"column":30},"end":{"row":69,"column":31},"action":"remove","lines":["A"]}],[{"start":{"row":69,"column":30},"end":{"row":69,"column":31},"action":"insert","lines":["l"],"id":100},{"start":{"row":69,"column":31},"end":{"row":69,"column":32},"action":"insert","lines":["o"]},{"start":{"row":69,"column":32},"end":{"row":69,"column":33},"action":"insert","lines":["g"]}],[{"start":{"row":69,"column":32},"end":{"row":69,"column":33},"action":"remove","lines":["g"],"id":101},{"start":{"row":69,"column":31},"end":{"row":69,"column":32},"action":"remove","lines":["o"]},{"start":{"row":69,"column":30},"end":{"row":69,"column":31},"action":"remove","lines":["l"]}],[{"start":{"row":69,"column":30},"end":{"row":69,"column":31},"action":"insert","lines":["$"],"id":102},{"start":{"row":69,"column":31},"end":{"row":69,"column":32},"action":"insert","lines":["l"]},{"start":{"row":69,"column":32},"end":{"row":69,"column":33},"action":"insert","lines":["o"]},{"start":{"row":69,"column":33},"end":{"row":69,"column":34},"action":"insert","lines":["g"]}],[{"start":{"row":69,"column":33},"end":{"row":69,"column":34},"action":"remove","lines":["g"],"id":103},{"start":{"row":69,"column":32},"end":{"row":69,"column":33},"action":"remove","lines":["o"]},{"start":{"row":69,"column":31},"end":{"row":69,"column":32},"action":"remove","lines":["l"]}],[{"start":{"row":69,"column":31},"end":{"row":69,"column":32},"action":"insert","lines":["L"],"id":104},{"start":{"row":69,"column":32},"end":{"row":69,"column":33},"action":"insert","lines":["o"]},{"start":{"row":69,"column":33},"end":{"row":69,"column":34},"action":"insert","lines":["g"]},{"start":{"row":69,"column":34},"end":{"row":69,"column":35},"action":"insert","lines":["-"]}],[{"start":{"row":69,"column":35},"end":{"row":69,"column":36},"action":"insert","lines":[">"],"id":105}],[{"start":{"row":69,"column":39},"end":{"row":69,"column":40},"action":"remove","lines":[")"],"id":106},{"start":{"row":69,"column":38},"end":{"row":69,"column":40},"action":"remove","lines":["()"]}],[{"start":{"row":69,"column":38},"end":{"row":69,"column":39},"action":"insert","lines":[")"],"id":107}],[{"start":{"row":70,"column":48},"end":{"row":70,"column":49},"action":"insert","lines":[","],"id":108}],[{"start":{"row":70,"column":49},"end":{"row":70,"column":64},"action":"insert","lines":["['Log' => $Log]"],"id":109}],[{"start":{"row":70,"column":62},"end":{"row":70,"column":63},"action":"remove","lines":["g"],"id":110},{"start":{"row":70,"column":61},"end":{"row":70,"column":62},"action":"remove","lines":["o"]},{"start":{"row":70,"column":60},"end":{"row":70,"column":61},"action":"remove","lines":["L"]}],[{"start":{"row":70,"column":60},"end":{"row":70,"column":61},"action":"insert","lines":["c"],"id":111},{"start":{"row":70,"column":61},"end":{"row":70,"column":62},"action":"insert","lines":["o"]},{"start":{"row":70,"column":62},"end":{"row":70,"column":63},"action":"insert","lines":["m"]},{"start":{"row":70,"column":63},"end":{"row":70,"column":64},"action":"insert","lines":["m"]},{"start":{"row":70,"column":64},"end":{"row":70,"column":65},"action":"insert","lines":["e"]},{"start":{"row":70,"column":65},"end":{"row":70,"column":66},"action":"insert","lines":["n"]},{"start":{"row":70,"column":66},"end":{"row":70,"column":67},"action":"insert","lines":["t"]},{"start":{"row":70,"column":67},"end":{"row":70,"column":68},"action":"insert","lines":["s"]}],[{"start":{"row":70,"column":53},"end":{"row":70,"column":54},"action":"remove","lines":["g"],"id":112},{"start":{"row":70,"column":52},"end":{"row":70,"column":53},"action":"remove","lines":["o"]},{"start":{"row":70,"column":51},"end":{"row":70,"column":52},"action":"remove","lines":["L"]}],[{"start":{"row":70,"column":51},"end":{"row":70,"column":52},"action":"insert","lines":["c"],"id":113},{"start":{"row":70,"column":52},"end":{"row":70,"column":53},"action":"insert","lines":["o"]},{"start":{"row":70,"column":53},"end":{"row":70,"column":54},"action":"insert","lines":["m"]},{"start":{"row":70,"column":54},"end":{"row":70,"column":55},"action":"insert","lines":["m"]},{"start":{"row":70,"column":55},"end":{"row":70,"column":56},"action":"insert","lines":["e"]},{"start":{"row":70,"column":56},"end":{"row":70,"column":57},"action":"insert","lines":["n"]},{"start":{"row":70,"column":57},"end":{"row":70,"column":58},"action":"insert","lines":["t"]},{"start":{"row":70,"column":58},"end":{"row":70,"column":59},"action":"insert","lines":["s"]}],[{"start":{"row":70,"column":51},"end":{"row":70,"column":59},"action":"remove","lines":["comments"],"id":114},{"start":{"row":70,"column":51},"end":{"row":70,"column":59},"action":"insert","lines":["comments"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":70,"column":59},"end":{"row":70,"column":59},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":9,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1650011396855,"hash":"cb67c68e63f5fc071633976468ec1d6fe9f71a72"}