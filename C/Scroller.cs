using System;
using System.Collections.Generic;
using System.Text;

namespace BTS_ConsoleApps
{
    class Scroller
    {
        private int position;
        private List<String> list;

        public Scroller(String message, int width, int spaceBetween)
        {
            list = new List<String>();
            if (message.Length < width)
            {
                StringBuilder sb = new StringBuilder(message);
                while (sb.Length < width) sb.Append(" ");
                message = sb.ToString();
            }
            width -= 2;

            if (width < 1) width = 1;
            if (spaceBetween < 0) spaceBetween = 0;
            
            for (int i = 0; i < message.Length - width; i++) list.Add(message.Substring(i, i + width));

            StringBuilder space = new StringBuilder();
            for (int i = 0; i < spaceBetween; ++i)
            {
                list.Add(message.Substring(message.Length - width + (i > width ? width : i), message.Length) + space);
                if (space.Length < width) space.Append(" ");
            }
            for (int i = 0; i < width - spaceBetween; ++i) list.Add(message.Substring(message.Length - width + spaceBetween + i, message.Length) + space + message.Substring(0, i));
            for (int i = 0; i < spaceBetween; i++)
            {
                if (i > space.Length) break;
                list.Add(space + message.Substring(0, width - (spaceBetween > width ? width : spaceBetween) + i));
            } // space.Substring(0, space.Length - i)
        }

        public String next()
        {
            StringBuilder sb = getNext();
            sb = getNext();
            if (sb.EnsureCapacity(0) != ' ') sb.Insert(0, ' ');
            return sb.ToString();
        }

        private StringBuilder getNext()
        {
            int size = list.Count;
            return new StringBuilder(list[(position++ % size)].Substring(0));
        }
    }
}
