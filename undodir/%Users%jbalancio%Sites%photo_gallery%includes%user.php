Vim�UnDo� N��m!�J�F)��r1B(�8N+�ܻ�m`�   $       #          :       :   :   :    L��l    _�                     *       ����                                                                                                                                                                                                                                                                                                                                                             L���     �   )   +   C              // $object = new self;5�_�                    *       ����                                                                                                                                                                                                                                                                                                                                                             L���     �   )   +   C              / $object = new self;5�_�                    *       ����                                                                                                                                                                                                                                                                                                                                                             L���     �   )   +   C               $object = new self;5�_�                       )    ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L��"     �          D              �         C    5�_�                           ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L��w    �      !   G              return $result_set;5�_�                           ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L��     �         G      V        $result_set = self::find_by_sql("SELECT * FROM users WHERE id={$id} LIMIT 1");5�_�      	                     ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���     �                5        $found = $database->fetch_array($result_set);5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���     �         F    5�_�   	              
           ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���     �                 5�_�   
                       ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���     �         F              return $found;5�_�                           ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���    �         F              5�_�                    6   3    ����                                                                                                                                                                                                                                                                                                                                                v   D    L��    �   6   8   G                      �   6   8   F    5�_�                    	       ����                                                                                                                                                                                                                                                                                                                            *          *   &       v   &    L���    �      
   G          public $usernamme;5�_�                    7       ����                                                                                                                                                                                                                                                                                                                            *          *   &       v   &    L���    �   6   7          =                echo '<p>found attribute '.$attribute.'</p>';5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             L��H     �       $   G          �       "   F    5�_�                    #       ����                                                                                                                                                                                                                                                                                                                                                             L��c     �   "   &   I          }5�_�                    #       ����                                                                                                                                                                                                                                                                                                                                                             L��l     �   "   &   K          5�_�                    %       ����                                                                                                                                                                                                                                                                                                                                                             L�ւ     �   $   %                  $passw5�_�                    $       ����                                                                                                                                                                                                                                                                                                                                                             L�և     �   #   %   L    5�_�                    %   	    ����                                                                                                                                                                                                                                                                                                                                                             L�֎     �   $   &   M      7        $username = $database->escape_value($username);5�_�                    %   -    ����                                                                                                                                                                                                                                                                                                                                                             L�֖    �   $   &   M      7        $password = $database->escape_value($username);5�_�                    %   4    ����                                                                                                                                                                                                                                                                                                                                                             L�֩     �   %   )   N              �   %   '   M    5�_�                    (   $    ����                                                                                                                                                                                                                                                                                                                                                             L���     �   '   )   P      .        $sql .= "WHERE username = '{username}'5�_�                    (   /    ����                                                                                                                                                                                                                                                                                                                                                             L���     �   '   +   P      /        $sql .= "WHERE username = '{$username}'5�_�                   ,        ����                                                                                                                                                                                                                                                                                                                                                V       L��     �   +   .   R    5�_�                    +       ����                                                                                                                                                                                                                                                                                                                                                V       L��     �   *   +              5�_�                     +   *    ����                                                                                                                                                                                                                                                                                                                                                V       L��}     �   *   ,   S      X        $result_array = self::find_by_sql("SELECT * FROM users WHERE id={$id} LIMIT 1");5�_�      !               +   *    ����                                                                                                                                                                                                                                                                                                                                                V       L�׀     �   *   ,   S      -        $result_array = self::find_by_sql(");5�_�       "           !   +   *    ����                                                                                                                                                                                                                                                                                                                                                V       L�ׄ   	 �   *   ,   S      ,        $result_array = self::find_by_sql();5�_�   !   #           "          ����                                                                                                                                                                                                                                                                                                                                                             L���     �         S      require_once('database.php');5�_�   "   $           #          ����                                                                                                                                                                                                                                                                                                                                                             L���     �         S      require_once(/'database.php');5�_�   #   %           $          ����                                                                                                                                                                                                                                                                                                                                                             L���    �         S      require_once('database.php');5�_�   $   &           %          ����                                                                                                                                                                                                                                                                                                                                                             L��L    �         S      class User {5�_�   %   '           &          ����                                                                                                                                                                                                                                                                                                                                                             L��R    �         S      class User DatabaseObject{5�_�   &   (           '          ����                                                                                                                                                                                                                                                                                                                                                 v       L��    �         S      class User DatabaseObject {5�_�   '   )           (   "        ����                                                                                                                                                                                                                                                                                                                            "           6           v       L��U     �   !   #   S      E    public static function authenticate($username="", $password="") {           global $database;   7        $username = $database->escape_value($username);   7        $password = $database->escape_value($password);       &        $sql = "SELECT * FROM users ";   2        $sql .= "WHERE username = '{$username}' ";   0        $sql .= "AND password = '{$password}' ";           $sql .= "LIMIT 1";   0        $result_array = self::find_by_sql($sql);   K        return !empty($result_array) ? array_shift($result_array) : false;        }       !    public function full_name() {   A        if(isset($this->first_name) && isset($this->last_name)) {   :            return $this->first_name.' '.$this->last_name;           } else {               return '';   	        }       }       2    private static function instantiate($record) {5�_�   (   *           )           ����                                                                                                                                                                                                                                                                                                                            "           "           v       L��Z     �      $   >      '    public static function find_all() {5�_�   )   +           *   "        ����                                                                                                                                                                                                                                                                                                                            7           7           v       L��m    �   "   $   T          �   "   $   S    5�_�   *   ,           +           ����                                                                                                                                                                                                                                                                                                                            8           8           v       L���     �      	   U       �      	   T    5�_�   +   -           ,           ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���     �      	   U      static <able_name="users";>5�_�   ,   /           -   &   0    ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���     �   %   '   U      8        return self::find_by_sql("SELECT * FROM users");5�_�   -   0   .       /   &   1    ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���     �   %   '   U      3        return self::find_by_sql("SELECT * FROM ");5�_�   /   1           0          ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���     �      	   U      )    protected static <able_name="users";>5�_�   0   2           1          ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���     �      	   U      (    protected static able_name="users";>5�_�   1   3           2      )    ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���    �      	   U      *    protected static $table_name="users";>5�_�   2   4           3   +   9    ����                                                                                                                                                                                                                                                                                                                            &   2       &   B       v   B    L��     �   *   ,   U      X        $result_array = self::find_by_sql("SELECT * FROM users WHERE id={$id} LIMIT 1");5�_�   3   5           4   +   9    ����                                                                                                                                                                                                                                                                                                                            &   2       &   B       v   B    L��     �   *   ,   U      Y        $result_array = self::find_by_sql("SELECT * FROM "users WHERE id={$id} LIMIT 1");5�_�   4   6           5   +   K    ����                                                                                                                                                                                                                                                                                                                            &   2       &   B       v   B    L��     �   *   ,   U      j        $result_array = self::find_by_sql("SELECT * FROM "self::$table_nameusers WHERE id={$id} LIMIT 1");5�_�   5   7           6   +   :    ����                                                                                                                                                                                                                                                                                                                            &   2       &   B       v   B    L��     �   *   ,   U      l        $result_array = self::find_by_sql("SELECT * FROM "self::$table_name."users WHERE id={$id} LIMIT 1");5�_�   6   8           7   +   N    ����                                                                                                                                                                                                                                                                                                                            &   2       &   B       v   B    L��!     �   *   ,   U      m        $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name."users WHERE id={$id} LIMIT 1");5�_�   7   9           8   +   N    ����                                                                                                                                                                                                                                                                                                                            &   2       &   B       v   B    L��&    �   *   ,   U      g        $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name."WHERE id={$id} LIMIT 1");5�_�   8   :           9   $        ����                                                                                                                                                                                                                                                                                                                            $           T           v        L��    �   #           2       // Common Database Methods   '    public static function find_all() {   E        return self::find_by_sql("SELECT * FROM ".self::$table_name);       }       .    public static function find_by_id($id=0) {           global $database;   h        $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id={$id} LIMIT 1");   K        return !empty($result_array) ? array_shift($result_array) : false;        }       1    public static function find_by_sql($sql='') {           global $database;   -        $result_set = $database->query($sql);            $object_array = array();   ;        while($row = $database->fetch_array($result_set)) {   6            $object_array[] = self::instantiate($row);   	        }           return $object_array;       }       2    private static function instantiate($record) {   :        // Could check that $record exists and is an array   %        // Simple, long-form approach           $object = new self;   '        // $object->id = $record['id'];   3        // $object->username = $record['username'];   3        // $object->password = $record['password'];   7        // $object->first_name = $record['first_name'];   6        // $object->last_name = $record[)'last_name'];       ,        // More dynamic, short-form aproach:   0        foreach($record as $attribute=>$value) {   4            if($object->has_attribute($attribute)) {   -                $object->$attribute = $value;               }   	        }           return $object;       }       0    private function has_attribute($attribute) {   K        // get_object_vars returns an associative array with all attributes   R        // (incl. private ones!) as the keys and their current values as the value   .        $object_vars = get_object_vars($this);   P        // We don't care about the value, we just want to know if the key exists   :        return array_key_exists($attribute, $object_vars);       }   }       ?>5�_�   9               :   #        ����                                                                                                                                                                                                                                                                                                                            $           $           v        L��k    �   "   $   $       5�_�   -           /   .   &   1    ����                                                                                                                                                                                                                                                                                                                            9           9           v       L���     �   %   '   U      E        return self::find_by_sql("SELECT * FROM ",sekf::<able_name>);5�_�                    ,        ����                                                                                                                                                                                                                                                                                                                                                V       L��     �   ,   -   R      X        $result_array = self::find_by_sql("SELECT * FROM users WHERE id={$id} LIMIT 1");   K        return !empty($result_array) ? array_shift($result_array) : false; 5�_�   
                       ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���     �         F              5�_�                            ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L���     �         F             e5�_�                        	    ����                                                                                                                                                                                                                                                                                                                               &          2       v   2    L��h     �      !   G              r$eturn $result_set;5��