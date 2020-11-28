^	
<!-- Khớp các kí tự đứng đầu một chuỗi. Nếu có nhiều cờ này thì nó còn khớp được cả các kí tự đứng đầu của mỗi dòng (sau kí tự xuống dòng). -->

<!-- Ví dụ, /^A/ sẽ không khớp được với 'A' trong "an A" vì 'A' lúc này không đứng đầu chuỗi, nhưng nó sẽ khớp "An E" vì lúc này 'A' đã đứng đầu chuỗi. -->

<!-- Ý nghĩa của '^' sẽ thay đổi khi nó xuất hiện như một kí tự đầu tiên trong một lớp kí tự, xem phần complemented character sets để biết thêm chi tiết. -->

$	
<!-- So khớp ở cuối chuỗi. Nếu gắn cờ multiline (đa dòng), nó sẽ khớp ngay trước kí tự xuống dòng.

Ví dụ, /t$/ không khớp với 't' trong chuỗi "eater" nhưng lại khớp trong chuỗi "eat". -->

*	
<!-- Cho phép kí tự trước nó lặp lại 0 lần hoặc nhiều lần. Tương đương với cách viết {0,}.

Ví dụ, /bo*/ khớp với 'boooo' trong chuỗi "A ghost booooed" nhưng không khớp trong chuỗi "A birth warbled". -->

+	
<!-- Cho phép kí tự trước nó lặp lại 1 lần hoặc nhiều lần. Tương đương với cách viết {1,}.

Ví dụ, /a+/ khớp với 'a' trong chuỗi "candy" và khớp với tất cả kí tự a liền nhau trong chuỗi "caaaaaaandy". -->
.	
<!-- Dấu . khớp với bất kì kí tự đơn nào ngoại trừ kí tự xuống dòng.

Ví dụ, /.n/ khớp với 'an' và 'on' trong chuỗi "no, an apple is on the tree", nhưng không khớp với 'no'. -->
(x)	
<!-- Khớp 'x' và nhớ kết quả so khớp này, như ví dụ ở dưới. Các dấu ngoặc tròn được gọi là các dấu ngoặc có nhớ.

Biểu mẫu /(foo) (bar) \1 \2/ khớp với 'foo' và 'bar' trong chuỗi "foo bar foo bar". \1 và \2 trong mẫu khớp với 2 từ cuối.

Chú ý rằng \1, \2, \n được sử dụng để so khớp các phần trong regex, nó đại diện cho nhóm so khớp đằng trước. Ví dụ: /(foo) (bar) \1 \2/ tương đương với biểu thức /(foo) (bar) foo bar/. 

Cú pháp $1, $2, $n còn được sử dụng trong việc thay thế các phần của một regex. Ví dụ: 'bar foo'.replace(/(...) (...)/, '$2 $1') sẽ đảo vị trí 2 từ 'bar' và 'foo' cho nhau. -->

QSA|qsappend
When the replacement URI contains a query string, the default behavior of RewriteRule is to discard the existing query string, and replace it with the newly generated one. Using the [QSA] flag causes the query strings to be combined.

Consider the following rule:

RewriteRule "/pages/(.+)" "/page.php?page=$1" [QSA]
With the [QSA] flag, a request for /pages/123?one=two will be mapped to /page.php?page=123&one=two. Without the [QSA] flag, that same request will be mapped to /page.php?page=123 - that is, the existing query string will be discarded.